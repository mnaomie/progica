<?php

namespace App\Controller;

use App\Repository\GiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(GiteRepository $gite): Response
    {

        $gites = $gite->findAll(Gite::class);

        return $this->render('home/index.html.twig', ['gites' => $gites]);
    }
}
