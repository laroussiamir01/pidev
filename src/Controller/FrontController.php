<?php

namespace App\Controller;

use App\Entity\Don;
use App\Entity\Event;
use App\Repository\DonRepository;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


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
    public function index1(EntityManagerInterface $entityManager, Request $request, EventRepository $eventRepository, PaginatorInterface $paginator): Response
    {
        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();

        $events = $paginator->paginate(
            $events, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render('front/indexeve.html.twig', [
            'events' => $events,
        ]);
    }
}


