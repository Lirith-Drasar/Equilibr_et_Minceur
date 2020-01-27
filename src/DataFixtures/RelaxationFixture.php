<?php

namespace App\DataFixtures;

use App\Entity\Relaxation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RelaxationFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $relaxation1 = new Relaxation();
        $relaxation1->setName('Nom de la prestation');
        $relaxation1->setPrice(19.66);
        $relaxation1->setDescription('Description de la prestation');
        $manager->persist($relaxation1);

        $relaxation2 = new Relaxation();
        $relaxation2->setName('Nom de la prestation');
        $relaxation2->setPrice(19.66);
        $relaxation2->setDescription('Description de la prestation');
        $manager->persist($relaxation2);
        
        $relaxation3 = new Relaxation();
        $relaxation3->setName('Nom de la prestation');
        $relaxation3->setPrice(19.66);
        $relaxation3->setDescription('Description de la prestation');
        $manager->persist($relaxation3);

        $manager->flush();
    }
}
