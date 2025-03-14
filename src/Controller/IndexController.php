<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/', name: 'app_')]
final class IndexController extends AbstractController
{
    #[Route('home', name: 'home')]
    public function home(): Response
    {
        $title = 'Accueil';
        return $this->render('index/home.html.twig', compact('title'));
    }
}
