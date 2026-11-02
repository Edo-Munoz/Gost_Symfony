<?php

namespace App\Controller\Admin;

use App\Entity\Track;
use App\Form\TrackType;
use App\Repository\TrackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/track')]
#[IsGranted('ROLE_MODERATOR', statusCode: 403, message: "Vous n'avez pas les droits pour accéder à cette page.")]
class TrackController extends AbstractController
{
    #[Route('', name: 'admin_track_index', methods: ['GET'])]
    public function index(TrackRepository $trackRepository): Response
    {
        return $this->render('admin/track/index.html.twig', [
            'tracks' => $trackRepository->findAllForModeration(),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_track_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Track $track, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TrackType::class, $track, [
            'submit_label' => 'Enregistrer les modifications',
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Le morceau « '.$track->getTitle().' » a bien été modifié.');

            return $this->redirectToRoute('admin_track_index');
        }

        return $this->render('admin/track/edit.html.twig', [
            'track' => $track,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_track_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Track $track, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete_track'.$track->getId(), $request->request->get('_token'))) {
            
            foreach ($track->getPlaylists()->toArray() as $playlist) {
                $track->removePlaylist($playlist);
            }
            foreach ($track->getLikedByUsers()->toArray() as $user) {
                $track->removeLikedByUser($user);
            }

            $title = $track->getTitle();
            $entityManager->remove($track);
            $entityManager->flush();

            $this->addFlash('success', 'Le morceau « '.$title.' » a été supprimé.');
        } else {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('admin_track_index');
    }
}
