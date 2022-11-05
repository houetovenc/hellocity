<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function home(): Response
    {
        return $this->render('homepage/home.html.twig');
    }

    /**
     * @Route("/about-us", name="app_about")
     */
    public function about(): Response
    {
        return $this->render('homepage/about.html.twig');
    }
}