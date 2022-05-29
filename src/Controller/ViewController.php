<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ViewController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig');
    }

    #[Route('/kalender', name: 'calendar')]
    public function calendar(): Response
    {
        return $this->render('pages/calendar.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }

    #[Route('/leeftijdsgroepen', name: 'ageGroups')]
    public function ageGroups(): Response
    {
        return $this->render('pages/age_groups.html.twig');
    }
}