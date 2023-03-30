<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    public function __construct(private UserRepository $userRepository) {}

//    #[Route('/users', methods: ['POST'], name: 'post_user')]
//    public function index(Request $request, EntityManagerInterface $entityManager): JsonResponse
//    {
//        $data = json_decode($request->getContent(), true);
//
//        $user = new User();
//        $user->setEmail($data['email']);
//        $user->setPassword($data['password']);
//
//        $entityManager->persist($user);
//        $entityManager->flush();
//
//        return $this->json( $user->toResponse() );
//    }

    #[Route('/users', methods: ['GET'], name: 'show_user')]
    public function show(Request $request): JsonResponse
    {
        $users = $this->userRepository->findAll();
        return $this->json( $users );
    }
}
