<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    public function __construct(private UserRepository $userRepository) {}

    #[Route('/users', methods: ['POST'], name: 'post_user')]
    public function index(Request $request): JsonResponse
    {
        $data = json_encode($request->getContent(), true);

        $user = new User();
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        //$em = $this->getDoctrine()->getManager();
        //$this->userRepository->persist($user);
        //$this->userRepository->flush();

        return $this->json( $user );

    }
}
