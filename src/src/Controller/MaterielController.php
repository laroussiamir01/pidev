<?php

namespace App\Controller;
use App\Entity\Materiel;
use App\Form\SearchType;
use App\Form\MaterielType;
use App\Entity\Fournisseur;
use App\Repository\MaterielRepository;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/materiel')]
class MaterielController extends AbstractController
{
    #[Route('/', name: 'app_materiel_index')]
    public function index(MaterielRepository $materielRepository,Request $request): Response
    {            $materiel= $materielRepository->findAll();

        
        
        return $this->render('materiel/index.html.twig', [
            'materiels' => $materiel,
        ]);
    }

    #[Route('/search', name: 'app_materiel_rech')]
    public function search(MaterielRepository $materielRepository,Request $request): Response
    {            $materiel= $materielRepository->findAll();

        $form=$this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
                      
            $result = $materielRepository->findByNom($form->getData());
            return $this->render(
                'materiel/resultatRech.html.twig', array(
                    "resultOfSearch" => $result,
                   

                    ));
        }
        return $this->render('materiel/search.html.twig', [
            'materiels' => $materiel,
            'SearchF' =>$form->createView(),
        ]);
    }

    #[Route('/front', name: 'app_materiel_front', methods: ['GET'])]
    public function affichageFront(MaterielRepository $materielRepository): Response
    {
        return $this->render('materiel/show_front.html.twig', [
            'materiels' => $materielRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_materiel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MaterielRepository $materielRepository,FlashyNotifier $flashy): Response
    {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $materielRepository->save($materiel, true);
            $flashy->success('Materiel ajoutée !');

            return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
        }
        $flashy->error('Uh Oh') ;
        return $this->renderForm('materiel/new.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materiel_show', methods: ['GET'])]
    public function show(Materiel $materiel): Response
    {
        return $this->render('materiel/show.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materiel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Materiel $materiel, MaterielRepository $materielRepository): Response
    {
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $materielRepository->save($materiel, true);

            return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('materiel/edit.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materiel_delete', methods: ['POST'])]
    public function delete(Request $request, Materiel $materiel, MaterielRepository $materielRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiel->getId(), $request->request->get('_token'))) {
            $materielRepository->remove($materiel, true);
        }

        return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
    }
}
