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

        $car4 = new Car();
        $car4->setModel('Phantom');
        $car4->setMake('Rolls Royce');
        $car4->setMileage(40000);
        $car4->setCost(350000);
        $car4->setEngineSize(6.6);
        $car4->setDescription('This is a description of the Rolls Royce Phantom');
        $car4->setImagePath('https://www.rolls-roycemotorcars.com/content/dam/rrmc/marketUK/rollsroycemotorcars_com/phantom-series-ii-in-detail/page-properties/01_RR_PHANTOM-single-card-min.jpg/jcr:content/renditions/cq5dam.web.1920.webp');
        $manager->persist($car4);

        $car5 = new Car();
        $car5->setModel('Wraith');
        $car5->setMake('Rolls Royce');
        $car5->setMileage(10000);
        $car5->setCost(280000);
        $car5->setEngineSize(6.6);
        $car5->setDescription('This is a description of the Rolls Royce Wraith');
        $car5->setImagePath('https://media.autoexpress.co.uk/image/private/s--X-WVjvBW--/f_auto,t_content-image-full-desktop@1/v1608210716/autoexpress/2020/12/Rolls-Royce%20Wraith%20Kryptos%202020-3.jpg');
        $manager->persist($car5);

        $car6 = new Car();
        $car6->setModel('M4 CSL');
        $car6->setMake('BMW');
        $car6->setMileage(2000);
        $car6->setCost(140000);
        $car6->setEngineSize(3.0);
        $car6->setDescription('This is a description of the BMW M4 CSL');
        $car6->setImagePath('https://cdn.bimmertoday.de/wp-content/uploads/2022/12/Manhart-BMW-M4-CSL-G82-Tuning-MH4-GTR-II-02.jpg');
        $manager->persist($car6);

        $car7 = new Car();
        $car7->setModel('C63 S E');
        $car7->setMake('Mercedes');
        $car7->setMileage(2000);
        $car7->setCost(120000);
        $car7->setEngineSize(2.0);
        $car7->setDescription('This is a description of the Mercedes C63 S E');
        $car7->setImagePath('https://images.pistonheads.com/nimg/46601/blobid1.jpg');
        $manager->persist($car7);

        $car8 = new Car();
        $car8->setModel('E63 S');
        $car8->setMake('Mercedes');
        $car8->setMileage(2000);
        $car8->setCost(130000);
        $car8->setEngineSize(4.0);
        $car8->setDescription('This is a description of the Mercedes E63 S Final Edition');
        $car8->setImagePath('https://cdn.hiconsumption.com/wp-content/uploads/2022/05/2023-Mercedes-AMG-E-63-S-4MATIC-Plus-Final-Edition-0-Hero.jpg');
        $manager->persist($car8);

        $car9 = new Car();
        $car9->setModel('Huracan Evo');
        $car9->setMake('Lamborghini');
        $car9->setMileage(2000);
        $car9->setCost(164000);
        $car9->setEngineSize(5.2);
        $car9->setDescription('This is a description of the Lamborghini Huracan Evo');
        $car9->setImagePath('https://media.gq-magazine.co.uk/photos/5d13a6d57fcc8e3a89820ec9/16:9/w_2560%2Cc_limit/huracan-evo-04-gq-17apr18_b.jpg');
        $manager->persist($car9);

        $car10 = new Car();
        $car10->setModel('Urus');
        $car10->setMake('Lamborghini');
        $car10->setMileage(500);
        $car10->setCost(235000);
        $car10->setEngineSize(4.0);
        $car10->setDescription('This is a description of the Lamborghini Urus');
        $car10->setImagePath('https://www.williamloughran.co.uk//media/7257/lamborghini-urus-80204-1.jpg');
        $manager->persist($car10);

        $car11 = new Car();
        $car11->setModel('GT3 RS');
        $car11->setMake('Porsche');
        $car11->setMileage(200);
        $car11->setCost(250000);
        $car11->setEngineSize(3.8);
        $car11->setDescription('This is a description of the Porsche GT3 RS');
        $car11->setImagePath('https://f7432d8eadcf865aa9d9-9c672a3a4ecaaacdf2fee3b3e6fd2716.ssl.cf3.rackcdn.com/C2299/U1295/IMG_84137-large.jpg');
        $manager->persist($car11);
        $manager->flush();
    }
}
