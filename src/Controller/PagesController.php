<?php

namespace App\Controller;

use App\Repository\ActivitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/resultats", name="app_results", methods={"POST", "GET"})
     */
    public function results(Request $request, ActivitiesRepository $activitiesRepository): Response
    {
        $searchingCity = trim($request->request->get('searchingCity'));
        if (!isset($searchingCity) || empty($searchingCity)) {
            return $this->redirectToRoute('app_home');
        }

        $weather = json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/weather?units=metric&q='.$searchingCity.'&appid=36827da870dc4b719d8737023f8404e0&lang=fr'));
        if (empty($weather)) {
            return $this->redirectToRoute('app_home');
        }

        $tempMin = $weather->main->temp_min;
        $tempMax = $weather->main->temp_max;
        $activities = $activitiesRepository->findByTemperature($tempMin, $tempMax);

        $weatherId = $weather->weather[0]->id;
        $isSunny = false;
        if ($weatherId >= 800 && $weatherId < 900) {
            $isSunny = true;
        }

        return $this->render('pages/results.html.twig', [
            'pageName' => 'results',
            'activities' => $activities,
            'weather' => $weather,
            'isSunny' => $isSunny,
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
