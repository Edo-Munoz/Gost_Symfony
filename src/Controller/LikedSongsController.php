<?php

namespace App\Controller;

use App\Entity\Track;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class LikedSongsController extends AbstractController
{
    #[Route('/liked-songs', name: 'app_liked_songs')]
    public function index(): Response
    {
        $tracks = $this->getUser()->getLikedTracks()->filter(
            fn (Track $track) => $track->isApproved()
        );

        return $this->render('liked_songs/index.html.twig', [
            'tracks' => $tracks,
        ]);
    }
}
