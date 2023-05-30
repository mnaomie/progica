<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

#[Route('/user', name: 'user_')]
class UserController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function userShow(): Response
    {
        return $this->render('user/index.html.twig');
    }

    #[Route('/signup', name: 'signup')]
    public function signup(Request $request, UserPasswordHasherInterface $passwordHasher, UserAuthenticatorInterface $userAuthenticator, EntityManagerInterface $em): Response
    {
        return $this->render('user/signup.html.twig');
    }

    #[Route('/signin', name: 'signin')]
    public function signin(): Response
    {
        return $this->render('user/signin.html.twig');
    }

    #[Route('/list', name: 'list')]
    public function userList(): Response
    {
        return $this->render('user/list.html.twig');
    }
}
