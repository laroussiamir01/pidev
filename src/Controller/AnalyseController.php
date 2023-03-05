<?php

namespace App\Controller;

use App\Entity\Analyse;
use App\Form\AnalyseType;
use App\Repository\AnalyseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\ProductSearchType;



#[Route('/analyse')]
class AnalyseController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard', methods: ['GET'])]
    public function test(AnalyseRepository $analyseRepository): Response
    {
        return $this->render('analyse/dashboard.html.twig', [
            'analyses' => $analyseRepository->findAll(),
        ]);
    }
    
    
    
    
    #[Route('/', name: 'app_analyse_index', methods: ['GET'])]
    public function index(AnalyseRepository $analyseRepository,PaginatorInterface $paginator,
    Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $min = $data['priceRange'][0];
            $max = $data['priceRange'][1];
    
            $qb = $analyseRepository->createQueryBuilder('p')
                ->where('p.prix >= :min')
                ->andWhere('p.prix <= :max')
                ->setParameter('min', $min)
                ->setParameter('max', $max);
    
            $analyses = $qb->getQuery()->getResult();
            
        } else {
            $analyses = $analyseRepository->findAll();
        }
    
        

        return $this->render('analyse/index.html.twig', [
            'form' => $form->createView(),
            'analyses' => $analyses,
         ]);
    }


    #[Route('/new', name: 'app_analyse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnalyseRepository $analyseRepository,SluggerInterface $slugger): Response
    {
        $analyse = new Analyse();
        $form = $this->createForm(AnalyseType::class, $analyse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('brochure')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('pdf_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $analyse->setImage($newFilename);
            }
            $analyseRepository->save($analyse, true);

            return $this->redirectToRoute('app_analyse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('analyse/new.html.twig', [
            'analyse' => $analyse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_analyse_show', methods: ['GET'])]
    public function show(Analyse $analyse): Response
    {
        return $this->render('analyse/show.html.twig', [
            'analyse' => $analyse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_analyse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Analyse $analyse,SluggerInterface $slugger, AnalyseRepository $analyseRepository): Response
    {
        $form = $this->createForm(AnalyseType::class, $analyse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('brochure')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('pdf_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $analyse->setImage($newFilename);
            }
            $analyseRepository->save($analyse, true);

            return $this->redirectToRoute('app_analyse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('analyse/edit.html.twig', [
            'analyse' => $analyse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_analyse_delete', methods: ['POST'])]
    public function delete(Request $request, Analyse $analyse, AnalyseRepository $analyseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$analyse->getId(), $request->request->get('_token'))) {
            $analyseRepository->remove($analyse, true);
        }

        return $this->redirectToRoute('app_analyse_index', [], Response::HTTP_SEE_OTHER);
    }


    
}
