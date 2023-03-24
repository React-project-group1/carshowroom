<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CarFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $car = new Car();
        $car->setModel('812');
        $car->setMake('Ferrari');
        $car->setMileage(20000);
        $car->setCost(260000);
        $car->setEngineSize(6.5);
        $car->setDescription('This is a description of the Ferrari 812');
        $car->setImagePath('https://images.unsplash.com/photo-1669644767278-c12464be133a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80');
        $manager->persist($car);

        $car2 = new Car();
        $car2->setModel('911 Turbo S');
        $car2->setMake('Porsche');
        $car2->setMileage(15000);
        $car2->setCost(168000);
        $car2->setEngineSize(3.8);
        $car2->setDescription('This is a description of the Porsche 911 Turbo S');
        $car2->setImagePath('https://images.unsplash.com/photo-1679478878845-af7294f28b27?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
        $manager->persist($car2);

        $car3 = new Car();
        $car3->setModel('Ghost');
        $car3->setMake('Rolls Royce');
        $car3->setMileage(40000);
        $car3->setCost(300000);
        $car3->setEngineSize(6.6);
        $car3->setDescription('This is a description of the Rolls Royce Ghost');
        $car3->setImagePath('https://images.unsplash.com/photo-1624804269473-828dcc30a210?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1065&q=80');
        $manager->persist($car3);
        $manager->flush();
    }
}
