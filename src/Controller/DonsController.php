<?php

namespace App\Controller;

use App\Entity\Dons;
use App\Form\DonsType;
use App\Repository\DonsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dons')]
class DonsController extends AbstractController
{
    #[Route('/', name: 'app_dons_index', methods: ['GET'])]
    public function index(DonsRepository $donsRepository): Response
    {
        return $this->render('dons/index.html.twig', [
            'dons' => $donsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_dons_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DonsRepository $donsRepository): Response
    {
        $don = new Dons();
        $form = $this->createForm(DonsType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donsRepository->save($don, true);

            return $this->redirectToRoute('app_dons_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dons/new.html.twig', [
            'don' => $don,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dons_show', methods: ['GET'])]
    public function show(Dons $don): Response
    {
        return $this->render('dons/show.html.twig', [
            'don' => $don,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_dons_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Dons $don, DonsRepository $donsRepository): Response
    {
        $form = $this->createForm(DonsType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donsRepository->save($don, true);

            return $this->redirectToRoute('app_dons_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dons/edit.html.twig', [
            'don' => $don,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dons_delete', methods: ['POST'])]
    public function delete(Request $request, Dons $don, DonsRepository $donsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$don->getId(), $request->request->get('_token'))) {
            $donsRepository->remove($don, true);
        }

        return $this->redirectToRoute('app_dons_index', [], Response::HTTP_SEE_OTHER);
    }
}
