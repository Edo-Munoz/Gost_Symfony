<?php

namespace App\Controller\Admin;

use App\Entity\Track;
use App\Repository\TrackRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/api')]
#[IsGranted('ROLE_MODERATOR')]
class ApiController extends AbstractController
{
    #[Route('/stats', name: 'admin_api_stats', methods: ['GET'])]
    public function stats(TrackRepository $trackRepository, UserRepository $userRepository): JsonResponse
    {
        return $this->json([
            'pending_tracks' => $trackRepository->count(['status' => Track::STATUS_PENDING]),
            'active_users' => $userRepository->count(['isBanned' => false]),
        ]);
    }

    #[Route('/track/{id}/approve', name: 'admin_api_track_approve', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function approveTrack(Track $track, Request $request, TrackRepository $trackRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        if (!$this->isCsrfTokenValid('admin_api', $request->headers->get('X-CSRF-TOKEN'))) {
            return $this->json(['success' => false, 'message' => 'Jeton CSRF invalide.'], Response::HTTP_FORBIDDEN);
        }

        $track->setStatus(Track::STATUS_APPROVED);
        $entityManager->flush();

        return $this->json([
            'success' => true,
            'pending_tracks' => $trackRepository->count(['status' => Track::STATUS_PENDING]),
        ]);
    }
}
