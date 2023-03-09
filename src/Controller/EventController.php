<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Users;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\EventSearchType;


use Knp\Component\Pager\PaginatorInterface;

use App\Entity\EvenLike;
use App\Repository\EvenLikeRepository;

#[Route('/event')]
class EventController extends AbstractController
{





















    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request, EventRepository $eventRepository, PaginatorInterface $paginator): Response
    {

        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();

        $events = $paginator->paginate(
            $events, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EventRepository $eventRepository): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRepository->save($event, true);

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRepository->save($event, true);

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            try {
                $eventRepository->remove($event, true);
                $this->addFlash('success', 'Event deleted successfully.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Unable to delete event: ' . $e->getMessage());
            }
        }
    
        return $this->redirectToRoute('app_event_index');
    }












    
 /**
 * @Route("/{id}/like", name="event_like")
 *
 * @param Event $event
 * @param EntityManagerInterface $manager
 * @param EvenLikeRepository $likeRepo
 * @return \Symfony\Component\HttpFoundation\Response
 */
public function likeToggle(Event $event, EntityManagerInterface $manager, EvenLikeRepository $likeRepo): Response
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json([
            'code' => 403,
            'message' => 'Unauthorized'
        ], 403);
    }

    $like = $likeRepo->findOneBy(['event' => $event, 'user' => $user]);

    if ($like) {
        $manager->remove($like);
        $manager->flush();
        return $this->json([
            'code' => 200,
            'message' => 'Like bien supprimé',
            'likes' => $likeRepo->count(['event' => $event]),
        ], 200);
    }

    $like = new EvenLike();
    $like->setEvent($event)
        ->setUser($user);

    $manager->persist($like);
    $manager->flush();

    return $this->json([
        'code' => 200,
        'message' => 'Like bien ajouté',
        'likes' => $likeRepo->count(['event' => $event]),
    ], 200);
}

  
}
