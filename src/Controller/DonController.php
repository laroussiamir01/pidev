<?php

namespace App\Controller;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarCharts;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use App\Entity\Don;
use App\Entity\Event;
use App\Form\DonType;
use App\Repository\DonRepository;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;







#[Route('/don')]
class DonController extends AbstractController
{
 
    #[Route('/', name: 'app_don_index', methods: ['GET','POST'])]
    public function index(DonRepository $donRepository,Request $request): Response
    {
        $propertySearch =new PropertySearch();
        $form=$this->createForm(PropertySearchType::class,$propertySearch);
        $form->handleRequest($request);
        $dons=$this->getDoctrine()->getRepository(Don::class)->findAll();
        if($form->isSubmitted() && $form->isValid()){
            $nom = $propertySearch->getNom();
            if ($nom!= "")
                $dons= $this->getDoctrine()->getRepository(Don::class)->findByNom($nom);
            else

                $dons= $this->getDoctrine()->getRepository(Don::class)->findAll();}
        return
            $this->render('don/index.html.twig',['formSearch' =>$form->createView(),'dons'=> $dons]);
    }





    

    #[Route('/new', name: 'app_don_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DonRepository $donRepository): Response
    {
        $don = new Don();
        $form = $this->createForm(DonType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donRepository->save($don, true);

            return $this->redirectToRoute('app_don_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('don/new.html.twig', [
            'don' => $don,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_don_show', methods: ['GET'])]
    public function show(Don $don): Response
    {
        return $this->render('don/show.html.twig', [
            'don' => $don,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_don_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Don $don, DonRepository $donRepository): Response
    {
        $form = $this->createForm(DonType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donRepository->save($don, true);

            return $this->redirectToRoute('app_don_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('don/edit.html.twig', [
            'don' => $don,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_don_delete', methods: ['POST'])]
    public function delete(Request $request, Don $don, DonRepository $donRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$don->getId(), $request->request->get('_token'))) {
            $donRepository->remove($don, true);
        }

        return $this->redirectToRoute('app_don_index', [], Response::HTTP_SEE_OTHER);
    }


   




}
