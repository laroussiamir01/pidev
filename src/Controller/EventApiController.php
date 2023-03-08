<?php
namespace App\Controller;

use App\Entity\Event;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use DateTime;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;





class EventApiController extends AbstractController
{
    private $entityManager;
    private $eventRepository;
    private $validator;

    public function __construct(EntityManagerInterface $entityManager, EventRepository $eventRepository)
    {
        $this->entityManager = $entityManager;
        $this->eventRepository = $eventRepository;
    }



    
    #[Route('/getEVent', name: 'getEVent', methods: ['GET', 'POST'])]
    public function myApi(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Event::class);
        $data = $repository->createQueryBuilder('e')
            ->select('e.id,e.nom, e.DateDebut, e.DateFin')
            ->getQuery()
            ->getArrayResult();

        return $this->json($data);
    }


    
     #[Route('/addEventJSON', name: 'addEventJSON', methods: ['GET', 'POST'])]
    public function addEventJSON( Request $request ,NormalizerInterface $normalizer ){
        $em=$this->getDoctrine()->getManager();
        $event=new Event();
        $event->setNom($request->get('nom'));
        $event->setDateDebut(new \DateTime($request->get('DateDebut')));
        $event->setDateFin(new \DateTime($request->get('DateFin')));
        $em -> persist($event);
        $em->flush();
        $jsonContent=$normalizer->normalize($event, 'json', ['circular_reference_handler' => function ($object) {
            return $object->getId();
        }, 'max_depth' => 1]);
        return new Response("event ajoutéé".json_encode($jsonContent));

    }



    #[Route('/editEventJSON', name: 'editEventJSON', methods: ['POST'])]
    public function editEventJSON(Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $event = $em->getRepository(Event::class)->find($id);
    
        if (!$event) {
            return new Response("Event with id $id not found");
        }
    
        $event->setNom($request->get('nom'));
        $event->setDateDebut(new \DateTime($request->get('DateDebut')));
        $event->setDateFin(new \DateTime($request->get('DateFin')));
        $em -> persist($event);
        $em->flush();
    
        $jsonContent = $normalizer->normalize($event, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            },
            'max_depth' => 1
        ]);
        return new Response("Event updated" . json_encode($jsonContent));
    }
    





    #[Route('/jsondelete', name: 'delete', methods: ['POST', 'DELETE'])]
    public function deleteEventJSON(Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $event = $em->getRepository(Event::class)->find($id);
    
  
    
        $action = $request->get('action');
        if ($action == "delete") {
            $em->remove($event);
            $em->flush();
            return new Response("Event deleted");
        } else {
            $em->persist($event);
            $em->flush();
            $jsonContent = $normalizer->normalize($event, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                },
                'max_depth' => 1
            ]);
            return new Response("Event updated" . json_encode($jsonContent));
        }
    }





    










































// #[Route('/apii', name: 'index', methods: ['GET', 'POST'])]
//public function index(SerializerInterface $serializer): Response
//{
  //  $events = $this->eventRepository->findAll();
    //$json = $serializer->serialize($events, 'json', ['circular_reference_handler' => function ($object) {
    //    return $object->getId();
    //}, 'max_depth' => 1]);

   // return new Response($json, 200, [
     //   'Content-Type' => 'application/json'
    //]);
  // }
  








/**
 * @Route("/apii/{id}", name="show", methods={"GET"})
 */
public function show(Event $event, SerializerInterface $serializer): Response
{
    $json = $serializer->serialize($event, 'json', ['circular_reference_handler' => function ($object) {
        return $object->getId();
    }, 'max_depth' => 1]);

    return new Response($json, 200, [
        'Content-Type' => 'application/json'
    ]);
}






#[Route('/cr', name: 'create', methods: ['GET', 'POST'])]
public function create(Request $request): Response
{
    $data = json_decode($request->getContent(), true);

    $event = new Event();
    $event->setNom($data['nom'] ?? null);
    $event->setDateDebut(new \DateTime($data['DateFebut'] ?? null));
    $event->setDateFin(new \DateTime($data['dateFin'] ?? null));

    $errors = $this->validator->validate($myEntity);

    if (count($errors) > 0) {
        return $this->json(['errors' => (string) $errors], 400);
    }

    $this->entityManager->persist($myEntity);
    $this->entityManager->flush();

    return $this->json($myEntity, 201);
}

}










