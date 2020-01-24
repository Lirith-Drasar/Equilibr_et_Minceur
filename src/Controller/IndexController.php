<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Content;
use App\Entity\Service;
use App\Repository\ContentRepository;
use App\Repository\ServiceRepository;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ProduitRepository $produitRepository, ContentRepository $contentRepository, ServiceRepository $serviceRepository, Request $request):Response {

        $services = $serviceRepository->findAll();
        $produit = $produitRepository->findAll();
        $presentation = $contentRepository->findBy(
            ['category' => 'presentation'],
            ['ordering' => 'ASC']
            );
        return $this->render('index/index.html.twig', [
            'presentations' => $presentation,
            'services' => $services,
            'produit' => $produit,
        ]);
    }
}