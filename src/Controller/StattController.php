<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\AppreciationRepository;
use App\Entity\Appreciation;
class StattController extends AbstractController
{
    #[Route('/stat/sujet-plus-parle', name: 'stat_sujet_plus_parle')]
    public function index(AppreciationRepository $appreciationRepository): Response
    
    {
        $sujetsPlusParles = $appreciationRepository->getSujetsPlusParles();

        return $this->render('appreciation/sujetPlusParler.html.twig', [
            'sujetsPlusParles' => $sujetsPlusParles,
        ]);
    }
}
