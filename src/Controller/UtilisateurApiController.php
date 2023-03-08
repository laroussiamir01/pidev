<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UserType;
use App\Form\SearchType;
use App\Form\TextType;  
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;  
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Serializer\Exception\CircularReferenceException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;



class UtilisateurApiController extends AbstractController
{
    #[Route('/utilisateur/api', name: 'app_utilisateur_api')]
    public function index(): Response
    {
        return $this->render('utilisateur_api/index.html.twig', [
            'controller_name' => 'UtilisateurApiController',
        ]);
    }

    #[Route('/utilisateur/signup', name: 'app_register_api')]
    public function signupAction(Request $request,UserPasswordEncoderInterface $PasswordEncoder)
    {

        $email = $request->query->get( "email");
        $Nom_user = $request->query->get( "Nom_user");
        $Prenom_user = $request->query->get( "Prenom_user");
        $password = $request->query->get( "password");
        $roles= $request->query->get( "roles");
      

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {



            return new Response("email invalid.");
            
             
            
            }
            
            $user = new Users();
            
            $user->setNomUser($Nom_user);
            $user->setPrenomUser($Prenom_user);
            
            $user->setEmail($email);
            
            $user->setPassword($PasswordEncoder->encodePassword(
                $user,
                $password));
            $user->setRoles(array($roles));
          /*   $user->setEtat(false);
            $user->setEtatUser("l utilisateur est debloque");
            $user->setStatus("l utilisateur est debloque"); */
            $user->setIsBlocked(false);
          /*   $user->setIsApprouved(false); */
             
            
             
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist ($user);
                $em->flush();
                
                return new JsonResponse( "Account is created",200);
            }
                catch (\Exception $ex) {
                return new Response("execption ".$ex->getMessage());
                
            
                
                }

        
    }



    #[Route('/utilisateur/signin', name: 'app_signin_api')]

    public function signinAction(Request $request) {
        $email = $request->query->get("email");
        $password = $request->query->get("password");
        
         
        
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Users ::class)->findOneBy(['email'=>$email]);
        //ken 19ito F base
        if($user){
        //hazm n9arn password zeda madano crypté nesta3mto password_verify
        if (password_verify($password, $user->getPassword())) {
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);
        }
        else {
        return new Response("passowrd not found");
        }
    }
        else {
        return new Response( "user not found");
        }
    }



    #[Route('/utilisateur/getPasswordByEmail', name: 'app_mdp_api')]


    public function getPassswordByEmail(Request $request) {

 

        $email = $request->get( 'email');
        $user = $this->getDoctrine()->getManager()->getRepository(Users::class)->findOneBy(['email'=>$email]);
        if($user) { 
        
        $password = $user->getPassword();
        
        $serializer = new Serializer([new ObjectNormalizer()]);
        
        $formatted = $serializer->normalize($password) ;
        
        return new JsonResponse($formatted) ;
        
        }
        
       
        
        
        
        return new Response ("user not found");
    }

    


    #[Route('/utilisateur/edit', name: 'app_edit_api')]

    public function editUser(UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager,Request $request, UsersRepository $userRepository, NormalizerInterface $normalizer): Response {



        
    
            $user = $userRepository->find($request->get('id'));
           /*  $user->setPassword(
                $request->get('password')
                ); */
            $user->setRoles(['Role_USER']);
            $user->setEmail($request->get('email'));
            $user->setNomUser($request->get('Nom_user'));
            $user->setPrenomUser($request->get('Prenom_user'));
            $entityManager->persist($user);
            $entityManager->flush();
            if($request->get('email') == "" || $request->get('Nom_user') == ""   )
                return new JsonResponse('manque');
            $jsonContent = $normalizer->normalize($user, 'json', ['groups' => "users"]);
            return new Response(json_encode($jsonContent));
    
    
    }




    #[Route('/utilisateur/delete', name: 'app_delete_api')]

      public function deleteuser(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Users::class)->find($id);
        if($user!=null ) {
            $em->remove($user);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("user a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id user invalide.");


    }



    #[Route('/utilisateur/display', name: 'app_display_api')]

      public function alluserAction()
      {
 
          $user = $this->getDoctrine()->getManager()->getRepository(Users::class)->findAll();
          $serializer = new Serializer([new ObjectNormalizer()]);
          $formatted = $serializer->normalize($user);
 
          return new JsonResponse($formatted);
 
      }

}
