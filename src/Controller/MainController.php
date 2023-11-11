<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */
    public function index( Request $request): Response
    {
        $searchTerm = $request->query->get('search', null); 

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'searchTerm' => $searchTerm, // Passer le terme de recherche au template

        ]);
    }
}
