<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/speisekarte")
 */
class SpeisekarteController extends Controller
{
    /**
     * @Route("/", name="speisekarte_index", methods="GET")
     */
    public function index()
    {
        return $this->render('speisekarte/speisekarte.html.twig');
    }
	
	/**
     * @Route("/fruechstueckfinal", name="fruechstueckfinal_index", methods="GET")
     */
    public function fruechstueckfinal()
    {
        return $this->render('speisekarte/fruechstueckfinal.html.twig');
    }

    /**
     * @Route("/getraenke", name="getraenke_index", methods="GET")
     */
    public function getraenke()
    {
        return $this->render('speisekarte/getraenke.html.twig');
    }

    /**
     * @Route("/mittagessen", name="mittagessen_index", methods="GET")
     */
    public function mittagessen()
    {
        return $this->render('speisekarte/mittagessen.html.twig');
    }

    /**
     * @Route("/salat", name="salat_index", methods="GET")
     */
    public function salat()
    {
        return $this->render('speisekarte/salat.html.twig');
    }
}
