<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProduitFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produit();
        $produit1->setNom('Nom du produit');
        $produit1->setImage('aloevera.jpeg');
        $produit1->setPrix(19.00);
        $produit1->setDescription('Description du produit et prix si besoin');
        $manager->persist($produit1);

        $manager->flush();
    }
}
