<?php

namespace App\Controller;

use App\Entity\Track;
use App\Form\TrackType;
use App\Repository\TrackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/track')]
class TrackController extends AbstractController
{
    use RedirectBackTrait;

    #[Route('', name: 'app_track_index', methods: ['GET'])]
    public function index(Request $request, TrackRepository $trackRepository): Response
    {
        $search = $request->query->get('q');

        return $this->render('track/index.html.twig', [
            'tracks' => $trackRepository->searchApproved($search),
            'query' => $search,
        ]);
    }

    #[Route('/suggest', name: 'app_track_suggest', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function suggest(Request $request, EntityManagerInterface $entityManager): Response
    {
        $track = new Track();
        $form = $this->createForm(TrackType::class, $track, [
            'submit_label' => 'Proposer ce morceau',
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $track->setStatus(Track::STATUS_PENDING);
            $track->setAddedBy($this->getUser());
            $track->setCreatedAt(new \DateTime());

            $entityManager->persist($track);
            $entityManager->flush();

            $this->addFlash('success', 'Merci ! Votre suggestion est en attente de validation par un modérateur.');

            return $this->redirectToRoute('app_track_index');
        }

        return $this->render('track/suggest.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}/like', name: 'app_track_like', methods: ['POST'], requirements: ['id' => '\d+'])]
    #[IsGranted('ROLE_USER')]
    public function like(Track $track, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('like'.$track->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Jeton CSRF invalide.');
        }

        if (!$track->isApproved()) {
            throw $this->createNotFoundException();
        }

        $user = $this->getUser();

        if ($user->getLikedTracks()->contains($track)) {
            $user->removeLikedTrack($track);
            $liked = false;
        } else {
            $user->addLikedTrack($track);
            $liked = true;
        }

        $entityManager->flush();

        $message = $liked
            ? '« '.$track->getTitle().' » a été ajouté à vos titres likés.'
            : '« '.$track->getTitle().' » a été retiré de vos titres likés.';

        return $this->answer($request, $liked ? 'success' : 'info', $message, 'app_track_index', ['liked' => $liked]);
    }
}
