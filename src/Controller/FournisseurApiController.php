<?php
namespace App\Controller;

use App\Entity\Fournisseur;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;




class FournisseurApiController extends AbstractController
{
    private $entityManager;
    private $eventRepository;
    private $validator;

    public function __construct(EntityManagerInterface $entityManager, FournisseurRepository $fournisseurRepository)
    {
        $this->entityManager = $entityManager;
        $this->eventRepository = $fournisseurRepository;
    }



    
    #[Route('/getFournisseur', name: 'getFournisseur', methods: ['GET', 'POST'])]
    public function myApi(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Fournisseur::class);
        $data = $repository->createQueryBuilder('e')
            ->select('e.id,e.nom')
            ->getQuery()
            ->getArrayResult();

        return $this->json($data);
    }


    
     #[Route('/addFournisseurJSON', name: 'addFournisseurJSON', methods: ['GET', 'POST'])]
    public function addEventJSON( Request $request ,NormalizerInterface $normalizer ){
        $em=$this->getDoctrine()->getManager();
        $fournisseur=new Fournisseur();
        $fournisseur->setNom($request->get('nom'));
        $em -> persist($fournisseur);
        $em->flush();
        $jsonContent=$normalizer->normalize($fournisseur, 'json', ['circular_reference_handler' => function ($object) {
            return $object->getId();
        }, 'max_depth' => 1]);
        return new Response("Fournisseur ajoutéé".json_encode($jsonContent));

    }



    #[Route('/editFournisseurJSON', name: 'editFournisseurJSON', methods: ['GET', 'POST'])]
    public function editEventJSON(Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $fournisseur = $em->getRepository(Fournisseur::class)->find($id);
    
        if (!$fournisseur) {
            return new Response("Fournisseur with id $id not found");
        }
    
        $fournisseur->setNom($request->get('nom'));
       
        $em -> persist($fournisseur);
        $em->flush();
    
        $jsonContent = $normalizer->normalize($fournisseur, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            },
            'max_depth' => 1,
            'groups' => ['fournisseur']
        ]);
        return new Response("Fournisseur updated" . json_encode($jsonContent));
    }
    





    #[Route('/jsondelete', name: 'delete')]
    public function deleteEventJSON(Request $request, NormalizerInterface $normalizer)
    {    $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $fournisseur = $em->getRepository(Fournisseur::class)->find($id);
        if($fournisseur!=null ) {
            $em->remove($fournisseur);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("fournisseur a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id fournisseur invalide.");
    }


/**
 * @Route("/apii/{id}", name="show", methods={"GET"})
 */
public function show(Fournisseur $fournisseur, SerializerInterface $serializer): Response
{
    $json = $serializer->serialize($fournisseur, 'json', ['circular_reference_handler' => function ($object) {
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

    $fournisseur = new Fournisseur();
    $fournisseur->setNom($data['nom'] ?? null);

    $errors = $this->validator->validate($fournisseur);

    if (count($errors) > 0) {
        return $this->json(['errors' => (string) $errors], 400);
    }

    $this->entityManager->persist($fournisseur);
    $this->entityManager->flush();

    return $this->json($fournisseur, 201);
}

}










