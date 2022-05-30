<?php

namespace App\Controller;

use App\Repository\GeledingRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
    public function contact(GeledingRepository $geledingRepository): Response
    {
        return $this->render('pages/contact.html.twig', [
            'geledingen' => $geledingRepository->findAll()
        ]);
    }

    #[Route('/leeftijdsgroepen', name: 'ageGroups')]
    public function leeftijdsGroepen(GeledingRepository $geledingRepository): Response
    {
        return $this->render('pages/leeftijdsgroepen.html.twig', [
            'geledingen' => $geledingRepository->findAll()
        ]);
    }

    #[Route('/{any}')]
    public function oldUrls(): RedirectResponse
    {
        return $this->redirectToRoute('index');
    }
}