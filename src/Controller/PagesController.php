<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function home(): Response
    {
        return $this->render('pages/home.html.twig', [
            'pageName' => 'home',
        ]);
    }

    /**
     * @Route("/resultats", name="app_results")
     */
    public function results(): Response
    {
        return $this->render('pages/results.html.twig', [
            'pageName' => 'results',
        ]);
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig', [
            'pageName' => 'contact',
        ]);
    }
}
