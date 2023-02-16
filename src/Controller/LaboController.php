<?php

namespace App\Controller;

use App\Entity\Labo;
use App\Form\LaboType;
use App\Repository\LaboRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/labo')]
class LaboController extends AbstractController
{
    #[Route('/', name: 'app_labo_index', methods: ['GET'])]
    public function index(LaboRepository $laboRepository): Response
    {
        return $this->render('labo/index.html.twig', [
            'labos' => $laboRepository->findAll(),
        ]);
    }
    #[Route('/front', name: 'front_show', methods: ['GET'])]
    public function front(LaboRepository $laboRepository): Response
    {
        return $this->render('labo/affichageL.html.twig', [
            'labos' => $laboRepository->findAll(),
        ]);
    }
    #[Route('/new', name: 'app_labo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LaboRepository $laboRepository): Response
    {
        $labo = new Labo();
        $form = $this->createForm(LaboType::class, $labo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $laboRepository->save($labo, true);

            return $this->redirectToRoute('app_labo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('labo/new.html.twig', [
            'labo' => $labo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_labo_show', methods: ['GET'])]
    public function show(Labo $labo): Response
    {
        return $this->render('labo/show.html.twig', [
            'labo' => $labo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_labo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Labo $labo, LaboRepository $laboRepository): Response
    {
        $form = $this->createForm(LaboType::class, $labo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $laboRepository->save($labo, true);

            return $this->redirectToRoute('app_labo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('labo/edit.html.twig', [
            'labo' => $labo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_labo_delete', methods: ['POST'])]
    public function delete(Request $request, Labo $labo, LaboRepository $laboRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$labo->getId(), $request->request->get('_token'))) {
            $laboRepository->remove($labo, true);
        }

        return $this->redirectToRoute('app_labo_index', [], Response::HTTP_SEE_OTHER);
    }
}
