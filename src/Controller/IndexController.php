<?php

namespace App\Controller;

use App\Entity\Content;
use App\Repository\ContentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(
        ContentRepository $contentRepository, Request $request):Response {

            $presentation = $contentRepository->findBy(
            ['category' => 'presentation'],
            ['ordering' => 'ASC']
            );
        return $this->render('index/index.html.twig', [
            'presentations' => $presentation,
        ]);
    }
}