<?php

namespace App\Controller;

use App\Entity\Car;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\CarRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/cars', methods: ['POST'], name: 'post_car')]
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $car = new Car();
        $car->setModel($data['model']);
        $car->setMake($data['make']);
        $car->setMileage($data['mileage']);
        $car->setCost($data['cost']);
        $car->setEngineSize($data['engine_size']);
        $car->setDescription($data['description']);
        $car->setImagePath($data['image_path']);

        $entityManager->persist($car);
        $entityManager->flush();

        return $this->json( $car);
    }

    #[Route('/cars/{id}', methods: ['DELETE'], name: 'delete_car')]
    public function remove($id, EntityManagerInterface $entityManager): JsonResponse
    {
        $car = $this->carRepository->find($id);

        $entityManager->remove($car);
        $entityManager->flush();

        return $this->json( $car );
    }
}
