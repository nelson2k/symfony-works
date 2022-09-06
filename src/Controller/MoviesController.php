<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            //'title' => 'Mução: O Rei do Nordeste'
        ]);
    }

    #[Route('/teste', name: 'teste_route')]
    // to use 'teste_route' 
    // inside the twig template
    // refer to path('teste_route')
    public function teste(): Response
    {
        return new Response('teste response');
    }
}
