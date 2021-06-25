<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]); 

        //return new Response('<h1> hello</h1>');
    }

    /**
     * 
     * @Route("/personne" ,name="personne")
     */
    public function personne() {

        return new Response("personne");
    }
}

