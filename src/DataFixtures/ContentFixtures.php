<?php

namespace App\DataFixtures;

use App\Entity\Content;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

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

        $content2 = new Content();
        $content2->setType('subtitle');
        $content2->setValue('Je suis heureuse de vous acceuillir sur mon site');
        $content2->setCategory('presentation');
        $content2->setOrdering('20');
        $manager->persist($content2);

        $content3 = new Content();
        $content3->setType('paragraph');
        $content3->setValue('Lorem ipsum dolor sit amet. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $content3->setCategory('presentation');
        $content3->setOrdering('30');
        $manager->persist($content3);

        $manager->flush();
    }
}