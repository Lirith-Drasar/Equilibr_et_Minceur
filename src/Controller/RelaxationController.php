<?php

namespace App\Controller;

use App\Entity\Relaxation;
use App\Form\RelaxationType;
use App\Repository\RelaxationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/relaxation")
 */
class RelaxationController extends AbstractController
{
    /**
     * @Route("/", name="relaxation_vue", methods={"GET"})
     */
    public function index(RelaxationRepository $relaxationRepository): Response
    {
        return $this->render('relaxation/wiewcustomer.html.twig', [
            'relaxations' => $relaxationRepository->findAll(),
        ]);
    }

        /**
     * @Route("/admin", name="relaxation_admin", methods={"GET"})
     */
    public function admin(RelaxationRepository $relaxationRepository): Response
    {
        return $this->render('relaxation/index.html.twig', [
            'relaxations' => $relaxationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="relaxation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $relaxation = new Relaxation();
        $form = $this->createForm(RelaxationType::class, $relaxation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($relaxation);
            $entityManager->flush();

            return $this->redirectToRoute('relaxation_index');
        }

        return $this->render('relaxation/new.html.twig', [
            'relaxation' => $relaxation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="relaxation_show", methods={"GET"})
     */
    public function show(Relaxation $relaxation): Response
    {
        return $this->render('relaxation/show.html.twig', [
            'relaxation' => $relaxation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="relaxation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Relaxation $relaxation): Response
    {
        $form = $this->createForm(RelaxationType::class, $relaxation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('relaxation_index');
        }

        return $this->render('relaxation/edit.html.twig', [
            'relaxation' => $relaxation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="relaxation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Relaxation $relaxation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$relaxation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($relaxation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('relaxation_index');
    }
}
