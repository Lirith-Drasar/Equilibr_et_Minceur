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
        $service1->setTitle('Relaxation');
        $service1->setParagraph('Description du service + prix.');
        $service1->setOrdering('10');
        $service1->setImage('plan_travail.jpg');

        $manager->persist($service1);
        
        $service2 = new Service();
        $service2->setTitle('Massage');
        $service2->setParagraph('Description Massage + prix.');
        $service2->setOrdering('20');
        $service2->setImage('fleur.jpg');
        $manager->persist($service2);

        $service3 = new Service();
        $service3->setTitle('Minceur');
        $service3->setParagraph('Description minceur + prix.');
        $service3->setOrdering('30');
        $service3->setImage('succulente.jpg');
        $manager->persist($service3);

        $service4 = new Service();
        $service4->setTitle('Produit');
        $service4->setParagraph('Description global des produits trouvé en lien "produit".');
        $service4->setOrdering('40');
        $service4->setImage('aloevera.jpeg');
        $manager->persist($service4);

        $manager->flush();
    }
}
