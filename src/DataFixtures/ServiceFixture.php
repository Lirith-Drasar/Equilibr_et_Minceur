<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class ServiceFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $service1 = new Service();
        $service1->setTitle('titre service 1');
        $service1->setParagraph('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .');
        $service1->setOrdering('10');
        $manager->persist($service1);

        $service2 = new Service();
        $service2->setTitle('titre service 2');
        $service2->setParagraph('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.');
        $service2->setOrdering('20');
        $manager->persist($service2);

        $service3 = new Service();
        $service3->setTitle('titre service 3');
        $service3->setParagraph('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .');
        $service3->setOrdering('30');
        $manager->persist($service3);

        $service4 = new Service();
        $service4->setTitle('titre service 4');
        $service4->setParagraph('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .');
        $service4->setOrdering('40');
        $manager->persist($service4);

        $manager->flush();
    }
}
