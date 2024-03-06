<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {

    #[Route("/", name: "home")]
    function index(Request $request): Response {
        // Response (contenu, statut, en-tête)
        return new Response('Bonjour ' . $request->query->get('name', "inconnu"));
    }
    
}
