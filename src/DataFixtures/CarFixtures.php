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

        $car12 = new Car();
        $car12->setModel('GT2 RS');
        $car12->setMake('Porsche');
        $car12->setMileage(100);
        $car12->setCost(275999);
        $car12->setEngineSize(3.8);
        $car12->setDescription('This is a description of the Porsche GT2 RS');
        $car12->setImagePath('https://m.atcdn.co.uk/a/media/%7Bresize%7D/c9be10c9b58b45599ab0b26c50153bb4.jpg');
        $manager->persist($car12);

        $car13 = new Car();
        $car13->setModel('GT4 RS');
        $car13->setMake('Porsche');
        $car13->setMileage(100);
        $car13->setCost(275999);
        $car13->setEngineSize(3.8);
        $car13->setDescription('This is a description of the GT4 RS Cayman');
        $car13->setImagePath('https://media.evo.co.uk/image/private/s--XdNrznmU--/v1615889531/evo/2021/03/Manthey%20Racing%20Porsche%20718%20Cayman%20GT4%20MR.jpg');
        $manager->persist($car13);

        $car14 = new Car();
        $car14->setModel('F12 Berlinetta');
        $car14->setMake('Ferrari');
        $car14->setMileage(2150);
        $car14->setCost(475999);
        $car14->setEngineSize(6.3);
        $car14->setDescription('This is a description of the Ferrari F12 Berlinetta');
        $car14->setImagePath('https://m.atcdn.co.uk/a/media/%7Bresize%7D/0167025ae5104f498a22299af744847c.jpg');
        $manager->persist($car14);

        $car15 = new Car();
        $car15->setModel('GT4 lusso');
        $car15->setMake('Ferrari');
        $car15->setMileage(2150);
        $car15->setCost(475999);
        $car15->setEngineSize(6.2);
        $car15->setDescription('This is a description of the Ferrari GT4 Lusso');
        $car15->setImagePath('https://www.artandrevs.com/upload/cars/gal/xl_1066-FERRARI-GTC4-Lusso-5946.jpg');
        $manager->persist($car15);

        $car16 = new Car();
        $car16->setModel('Mustang GT');
        $car16->setMake('Ford');
        $car16->setMileage(10000);
        $car16->setCost(49999);
        $car16->setEngineSize(4.0);
        $car16->setDescription('This is a description of the Ford Mustang GT');
        $car16->setImagePath('https://www.motortrend.com/uploads/2022/09/2024-ford-mustang-gt-03.jpg');
        $manager->persist($car16);

        $car17 = new Car();
        $car17->setModel('F150');
        $car17->setMake('Ford');
        $car17->setMileage(100);
        $car17->setCost(149999);
        $car17->setEngineSize(5.2);
        $car17->setDescription('This is a description of the Ford F150 Raptor');
        $car17->setImagePath('https://www.topgear.com/sites/default/files/images/cars-road-test/2018/02/e2f9a959a8d61564ad2a9d40482c9738/row05137.jpg?w=1280&h=720');
        $manager->persist($car17);

        $car18 = new Car();
        $car18->setModel('M3');
        $car18->setMake('BMW');
        $car18->setMileage(1000);
        $car18->setCost(119900);
        $car18->setEngineSize(3.0);
        $car18->setDescription('This is a description of the BMW M3');
        $car18->setImagePath('https://media.autoexpress.co.uk/image/private/s--X-WVjvBW--/f_auto,t_content-image-full-desktop@1/v1600853911/evo/2020/09/2021%20BMW%20M3%20fresh-9.jpg');
        $manager->persist($car18);

        $car19 = new Car();
        $car19->setModel('M3 Touring');
        $car19->setMake('BMW');
        $car19->setMileage(1000);
        $car19->setCost(129900);
        $car19->setEngineSize(3.0);
        $car19->setDescription('This is a description of the BMW M3 Touring');
        $car19->setImagePath('https://cdn.bmwblog.com/wp-content/uploads/2020/08/BMW-M3-Touring-photoshop-00.jpg');
        $manager->persist($car19);

        $car20 = new Car();
        $car20->setModel('Aventador SVG');
        $car20->setMake('Lamborghini');
        $car20->setMileage(5);
        $car20->setCost(2129900);
        $car20->setEngineSize(5.0);
        $car20->setDescription('This is a description of the Lamborghini Miura');
        $car20->setImagePath('https://www.cmc-modelcarshop.de/media/images/org/79177-1.jpg');
        $manager->persist($car20);

        $car21 = new Car();
        $car21->setModel('Miura');
        $car21->setMake('Lamborghini');
        $car21->setMileage(5);
        $car21->setCost(2129900);
        $car21->setEngineSize(5.0);
        $car21->setDescription('This is a description of the Lamborghini Miura');
        $car21->setImagePath('https://robbreport.com/wp-content/uploads/2021/08/Lamborghini_Miura_P400S11.jpg');
        $manager->persist($car21);

        $car22 = new Car();
        $car22->setModel('Bentayga');
        $car22->setMake('Bentley');
        $car22->setMileage(500);
        $car22->setCost(212990);
        $car22->setEngineSize(5.5);
        $car22->setDescription('This is a description of the Bentley Bentayga');
        $car22->setImagePath('https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/bentley-bentayga-ewb-01-front-tracking.jpg');
        $manager->persist($car22);

        $car23 = new Car();
        $car23->setModel('Continental GT');
        $car23->setMake('Bentley');
        $car23->setMileage(5000);
        $car23->setCost(152990);
        $car23->setEngineSize(5.5);
        $car23->setDescription('This is a description of the Bentley Continental GT');
        $car23->setImagePath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbiHu1o8xlPJBPCaYfy5eYG-W_7XTYfqbwb1gCAcWbH5IsoWEDczo7pPqQLHbnoF7jfGA&usqp=CAU');
        $manager->persist($car23);
        $manager->flush();
    }
}
