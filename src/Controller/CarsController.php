<?php

namespace App\Controller;

use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CarsController extends AbstractController
{
    public function __construct(private CarRepository $carRepository) {}// Entity manager usable for all functions (constructor)

    // View all cars
    #[Route('/cars', methods: ['GET'], name: 'cars')]
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

    // Single car view
    #[Route('/cars/{id}', methods: ['GET'], name: 'show_car')]
    public function show($id): JsonResponse
    {
        $car = $this->carRepository->find($id);
        return $this->json( $car );
    }
}
