<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Content;

class ContentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $content1 = new Content();
        $content1->setType('title');
        $content1->setValue('Bienvenue sur Equilibr\'& Minceur');
        $content1->setCategory('presentation');
        $content1->setOrdering('10');
        $manager->persist($content1);

        $content1 = new Content();
        $content1->setType('subtitle');
        $content1->setValue('Je suis heureuse de vous acceuillir sur mon site');
        $content1->setCategory('presentation');
        $content1->setOrdering('20');
        $manager->persist($content1);

        $content1 = new Content();
        $content1->setType('paragraph');
        $content1->setValue('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        $content1->setCategory('presentation');
        $content1->setOrdering('30');
        $manager->persist($content1);

        $manager->flush();
    }
}
