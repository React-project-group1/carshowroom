<?php

namespace App\Controller;

use App\Entity\Car;
use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CarsController extends AbstractController
{
    private $carRepository;
    public function __construct(CarRepository $carRepository) { // Entity manager usable for all functions (constructor)
        $this->carRepository = $carRepository;
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
        // $repository = $this->em->getRepository(Car::class);

        $cars = $this->carRepository->findAll();

        return $this->json( $cars );
    }

    #[Route('/cars/{id}', methods: ['GET'], name: 'show_car')]
    public function show($id): JsonResponse
    {
        // $repository = $this->em->getRepository(Car::class);
        $car = $this->carRepository->find($id);
        // $car = $this->carRepository->find($id);

        return $this->json( $car );
    }
}
