<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use App\Form\SearchType;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/users')]
class UsersController extends AbstractController
{
    #[Route('/', name: 'app_users_index', methods: ['GET'])]
    public function index(UsersRepository $usersRepository,Session $session): Response
    {
       // $utilisateur = $this->getUser();
       // if($utilisateur && in_array('ROLE_ADMIN', $utilisateur->getRoles())){ 
        return $this->render('users/index.html.twig', [
            'users' => $usersRepository->findAll(),
        ]);    //}
     //   $session->set("message", "Vous n'avez pas le droit d'acceder à la page admin vous avez été redirigé sur cette page");
     //   return $this->redirectToRoute('app_home');
    }

    #[Route('/search', name: 'app_users_rech')]
    public function search(UsersRepository $usersRepository,Request $request): Response
    {            $materiel= $usersRepository->findAll();

        $form=$this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
                      
            $result = $usersRepository->findByNom($form->getData());
            return $this->render(
                'users/resultatRech.html.twig', array(
                    "resultOfSearch" => $result,
                   

                    ));
        }
        return $this->render('users/search.html.twig', [
            'users' => $usersRepository->findAll(),
            "SearchF" => $form->createView() 
        ]);
    }

    #[Route('/search1', name: 'app_users_rech1')]
    public function search1(UsersRepository $usersRepository,Request $request): Response
    {            $materiel= $usersRepository->findAll();

        $form=$this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
                      
            $result = $usersRepository->findByUsersReclamation($form->getData());
            return $this->render(
                'users/resultatRech.html.twig', array(
                    "resultOfSearch" => $result,
                   

                    ));
        }
        return $this->render('users/search.html.twig', [
            'users' => $usersRepository->findAll(),
            "SearchF" => $form->createView() 
        ]);
    }



    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UsersRepository $usersRepository): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usersRepository->save($user, true);

            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_users_show', methods: ['GET'])]
    public function show(Users $user): Response
    {
        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_users_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Users $user, UsersRepository $usersRepository): Response
    {
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usersRepository->save($user, true);

            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_users_delete', methods: ['POST'])]
    public function delete(Request $request, Users $user, UsersRepository $usersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $usersRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
 * @Route("/block/{id}", name="block_user")
 */
public function blockUser(Request $request, EntityManagerInterface $entityManager, UsersRepository $userRepository, int $id): Response
{
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('The user does not exist');
    }

    $user->setIsBlocked(true);
    $entityManager->flush();

    $this->addFlash('success', 'User has been blocked');

    return $this->redirectToRoute('app_users_index');
}

/**
 * @Route("/unblock/{id}", name="unblock_user")
 */
public function unblockUser(Request $request, EntityManagerInterface $entityManager, UsersRepository $userRepository, int $id): Response
{
    $user = $userRepository->find($id);

    if (!$user) {
        throw $this->createNotFoundException('The user does not exist');
    }

    $user->setIsBlocked(false);
    $entityManager->flush();

    $this->addFlash('success', 'User has been unblocked');

    return $this->redirectToRoute('app_users_index');
}



   
}
