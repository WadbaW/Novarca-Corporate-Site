<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/', name: 'app_')]
final class IndexController extends AbstractController
{
    #[Route('', name: 'home')]
    public function home(): Response
    {
        $title = 'Accueil';
        return $this->render('index/home.html.twig', compact('title'));
    }

    #[Route('services/', name: 'services')]
    public function services(): Response
    {
        $title = 'Services';
        return $this->render('index/services.html.twig', compact('title'));
    }

    #[Route('about/', name: 'about')]
    public function about(): Response
    {
        $title = 'A propos';
        return $this->render('index/about.html.twig', compact('title'));
    }

    #[Route('contact/', name: 'contact')]
    public function contact(): Response
    {
        $title = 'Contact';
        return $this->render('index/contact.html.twig', compact('title'));
    }

    #[Route('rgpd/', name: 'rgpd')]
    public function rgpd(): Response
    {
        $title = 'RGPD';
        return $this->render('index/rgpd.html.twig', compact('title'));
    }
}
