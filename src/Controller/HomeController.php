<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home_index", methods="GET")
     */
    public function index()
    {
        return $this->render('Home/home_page.html.twig');
    }
	
	/**
     * @Route("/avis", name="avis_index", methods="GET")
     */
    public function avis()
    {
        return $this->render('Home/avis.html.twig');
    }

    /**
     * @Route("/speisekarte", name="speisekarte_index", methods="GET")
     */
    public function speisekarte()
    {
        return $this->render('speisekarte/speisekarte.html.twig');
    }

    /**
     * @Route("/reservierung", name="reservierung_index", methods="GET")
     */
    public function reservierung()
    {
        return $this->render('reservierung/reservierung.html.twig');
    }

    /**
     * @Route("/standort", name="standort_index", methods="GET")
     */
    public function standort()
    {
        return $this->render('standort/standort.html.twig');
    }
}
