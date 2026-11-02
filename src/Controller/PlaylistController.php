<?php

namespace App\Controller;

use App\Entity\Playlist;
use App\Entity\Track;
use App\Form\PlaylistType;
use App\Repository\PlaylistRepository;
use App\Repository\TrackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/playlist')]
#[IsGranted('ROLE_USER')]
class PlaylistController extends AbstractController
{
    use RedirectBackTrait;

    #[Route('', name: 'app_playlist_index', methods: ['GET', 'POST'])]
    public function index(Request $request, PlaylistRepository $playlistRepository, EntityManagerInterface $entityManager): Response
    {
        $playlist = new Playlist();
        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $playlist->setUser($this->getUser());
            $playlist->setCreatedAt(new \DateTime());

            $entityManager->persist($playlist);
            $entityManager->flush();

            $this->addFlash('success', 'La playlist « '.$playlist->getName().' » a bien été créée.');

            return $this->redirectToRoute('app_playlist_show', ['id' => $playlist->getId()]);
        }

        return $this->render('playlist/index.html.twig', [
            'playlists' => $playlistRepository->findByUser($this->getUser()),
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_playlist_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Playlist $playlist): Response
    {
        $this->denyIfNotOwner($playlist);

        return $this->render('playlist/show.html.twig', [
            'playlist' => $playlist,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_playlist_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Playlist $playlist, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyIfNotOwner($playlist);

        if ($this->isCsrfTokenValid('delete_playlist'.$playlist->getId(), $request->request->get('_token'))) {
            $name = $playlist->getName();
            $entityManager->remove($playlist);
            $entityManager->flush();

            $this->addFlash('success', 'La playlist « '.$name.' » a été supprimée.');
        } else {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('app_playlist_index');
    }


    #[Route('/add-track/{id}', name: 'app_playlist_add_track', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function addTrack(Track $track, Request $request, PlaylistRepository $playlistRepository, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('add_track'.$track->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Jeton CSRF invalide.');
        }

        if (!$track->isApproved()) {
            throw $this->createNotFoundException();
        }

        $playlist = $playlistRepository->find((int) $request->request->get('playlist'));

        if (null === $playlist) {
            return $this->answer($request, 'danger', 'Veuillez choisir une playlist.', 'app_track_index');
        }

        $this->denyIfNotOwner($playlist);

        if ($playlist->getTracks()->contains($track)) {
            return $this->answer($request, 'warning', '« '.$track->getTitle().' » est déjà dans la playlist « '.$playlist->getName().' ».', 'app_track_index');
        }

        $playlist->addTrack($track);
        $entityManager->flush();

        return $this->answer($request, 'success', '« '.$track->getTitle().' » a été ajouté à la playlist « '.$playlist->getName().' ».', 'app_track_index');
    }

    #[Route('/{id}/remove-track/{trackId}', name: 'app_playlist_remove_track', methods: ['POST'], requirements: ['id' => '\d+', 'trackId' => '\d+'])]
    public function removeTrack(Playlist $playlist, int $trackId, Request $request, TrackRepository $trackRepository, EntityManagerInterface $entityManager): Response
    {
        $this->denyIfNotOwner($playlist);

        $track = $trackRepository->find($trackId);

        if (null === $track) {
            throw $this->createNotFoundException();
        }

        if ($this->isCsrfTokenValid('remove_track'.$playlist->getId().'_'.$trackId, $request->request->get('_token'))) {
            $playlist->removeTrack($track);
            $entityManager->flush();

            $this->addFlash('info', '« '.$track->getTitle().' » a été retiré de la playlist.');
        } else {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('app_playlist_show', ['id' => $playlist->getId()]);
    }

    private function denyIfNotOwner(Playlist $playlist): void
    {
        if ($playlist->getUser()?->getId() !== $this->getUser()->getId()) {
            throw $this->createAccessDeniedException("Cette playlist ne vous appartient pas.");
        }
    }
}
