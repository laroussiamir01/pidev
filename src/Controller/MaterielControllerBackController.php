<?php

namespace App\Controller;

use App\Entity\Materiel;
use App\Form\MaterielType;
use App\Repository\MaterielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/materiel')]
class MaterielControllerBackController extends AbstractController
{
    #[Route('/', name: 'app_materiel_controller_back_index', methods: ['GET'])]
    public function index(MaterielRepository $materielRepository): Response
    {
        return $this->render('materiel_controller_back/show.html.twig', [
            'materiels' => $materielRepository->findAll(),
        ]);
    }
    #[Route('/show', name: 'app_materiel_controller_back_show', methods: ['GET'])]
    public function show(MaterielRepository $materielRepository): Response
    {
        return $this->render('materiel_controller_back/show.html.twig', [
            'materiels' => $materielRepository->findAll(),
        ]);
    }
    #[Route('/afficher', name: 'app_materiel_controller_back_index', methods: ['GET'])]
    public function affichage(MaterielRepository $materielRepository): Response
    {
        return $this->render('materiel_controller_back/show_front.html.twig', [
            'materiels' => $materielRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_materiel_controller_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MaterielRepository $materielRepository): Response
    {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $materielRepository->save($materiel, true);

            return $this->redirectToRoute('app_materiel_controller_back_show', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('materiel_controller_back/new.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }

   

    #[Route('/{id_mat}/edit', name: 'app_materiel_controller_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Materiel $materiel, MaterielRepository $materielRepository): Response
    {
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $materielRepository->save($materiel, true);

            return $this->redirectToRoute('app_materiel_controller_back_show', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('materiel_controller_back/edit.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }

    #[Route('/{id_mat}', name: 'app_materiel_controller_back_delete', methods: ['POST'])]
    public function delete(Request $request, Materiel $materiel, MaterielRepository $materielRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiel->getId_mat(), $request->request->get('_token'))) {
            $materielRepository->remove($materiel, true);
        }

        return $this->redirectToRoute('app_materiel_controller_back_show', [], Response::HTTP_SEE_OTHER);
    }
    
}
