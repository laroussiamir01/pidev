<?php

namespace App\Controller;

use App\Entity\Event;
use App\Repository\EventRepository;
use App\Entity\Don;
use App\Repository\DonRepository;
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

class DonApiController extends AbstractController
{
    #[Route('/don/api', name: 'app_don_api')]
    public function index(): Response
    {
        return $this->render('don_api/index.html.twig', [
            'controller_name' => 'DonApiController',
        ]);
    }




    #[Route('/addDonJSON', name: 'addDonJSON', methods: ['GET', 'POST'])]
    public function addDonJSON(Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $don = new Don();
    
        $don->setNom($request->get('nom'));
        $don->setMontant($request->get('montant'));
    
        // Fetch the Event object from the database using its ID
        $event = $em->getRepository(Event::class)->find($request->get('event_id'));
    
        // Set the Events property to the Event object (or null if event_id is not provided)
        $don->setEvents($event);
    
        $em->persist($don);
        $em->flush();
    
        $jsonContent = $normalizer->normalize($don, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            },
            'max_depth' => 1
        ]);
    
        return new Response("don ajoutéé".json_encode($jsonContent));
    }
   
    
    
    
    #[Route('/getDon', name: 'getDon', methods: ['GET', 'POST'])]
    public function getDon()
    {

        $don=$this->getDoctrine()->getManager()
            ->getRepository(Don::class)
            ->findAll();

        $data =  array();
        foreach ($don as $key => $p){

            $data[$key]['id']= $p->getId();
            $data[$key]['nom']= $p->getNom();
            $data[$key]['montant']= $p->getMontant();
            $data[$key]['event_id']= $p->getEvents();

        }

        return new JsonResponse($data);

    }
    
    




}
