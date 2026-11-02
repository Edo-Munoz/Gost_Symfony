<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/user')]
#[IsGranted('ROLE_ADMIN', statusCode: 403, message: "Vous n'avez pas les droits pour accéder à cette page.")]
class UserController extends AbstractController
{
    #[Route('', name: 'admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('admin/user/index.html.twig', [
            'users' => $userRepository->findBy([], ['createdAt' => 'DESC']),
        ]);
    }

    #[Route('/{id}/toggle-ban', name: 'admin_user_toggle_ban', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function toggleBan(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('toggle'.$user->getId(), $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
        } elseif ($user->getId() === $this->getUser()->getId()) {
            $this->addFlash('danger', 'Vous ne pouvez pas vous bannir vous-même.');
        } else {
            $user->setIsBanned(!$user->isBanned());
            $entityManager->flush();

            $this->addFlash('success', $user->isBanned()
                ? 'L\'utilisateur '.$user->getUsername().' a été banni.'
                : 'L\'utilisateur '.$user->getUsername().' a été débanni.');
        }

        return $this->redirectToRoute('admin_user_index');
    }

    #[Route('/{id}/role', name: 'admin_user_role', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function changeRole(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $role = $request->request->get('role');

        if (!$this->isCsrfTokenValid('role'.$user->getId(), $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
        } elseif ($user->getId() === $this->getUser()->getId()) {
            $this->addFlash('danger', 'Vous ne pouvez pas modifier votre propre rôle.');
        } elseif (!in_array($role, ['ROLE_USER', 'ROLE_MODERATOR', 'ROLE_ADMIN'], true)) {
            $this->addFlash('danger', 'Rôle inconnu.');
        } else {
            $user->setRoles([$role]);
            $entityManager->flush();

            $this->addFlash('success', 'Le rôle de '.$user->getUsername().' est maintenant '.$role.'.');
        }

        return $this->redirectToRoute('admin_user_index');
    }
}
