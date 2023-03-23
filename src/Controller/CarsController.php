<?php

namespace App\Controller;

use App\Entity\Car;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CarsController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em) { // Entity manager usable for all functions (constructor)
        $this->em = $em;
    }
    #[Route('/cars', name: 'cars')]
    public function index(): JsonResponse
    {
        // findAll() - SELECT * FROM cars
        // find(param) - SELECT * FROM cars WHERE id = param
        // findBy() - SELECT * FROM cars ORDER BY id DESC
        // findOneBy() - SELECT * FROM cars WHERE id = 1 AND make = 'Ferrari' ORDER BY id DESC
        // count() - return length/number of rows. SELECT COUNT() FROM cars WHERE id = 1
        // getClassName() - returns current entity

        $repository = $this->em->getRepository(Car::class);
        $cars = $repository->findAll();

        dd($cars);

        // return $this->json();
    }
}
