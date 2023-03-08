<?php

namespace App\Controller;

use App\Repository\DonRepository;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Don;


#[Route('/front')]
class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(DonRepository $donRepository): Response
    {
        return $this->render('front/index.html.twig', [
            'done' => $donRepository->findAll(),
        ]);
    }




    #[Route('/eve', name: 'app_eve')]
    public function indexx(EventRepository $eventRepository): Response
    {
        return $this->render('front/indexeve.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }
}


