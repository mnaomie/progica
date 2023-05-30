<?php

namespace App\Controller;

use App\Repository\GiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/list', name: 'list_')]
class ListController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function listGite(GiteRepository $gite): Response
    {

        $gites = $gite->findAll(Gite::class);

        return $this->render('list/index.html.twig', ['gites' => $gites]);
    }

    #[Route('/{id}', name: 'show')]
    public function showGite()
    {
        return $this->render('list/show.html.twig');
    }

    #[Route('/new', name: 'new')]
    public function newGite()
    {
        return $this->render('list/new.html.twig');
    }
}
