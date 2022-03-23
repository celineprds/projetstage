<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of DonneesController
 *
 * @author prade
 */
class DonneesController extends AbstractController{
    
    /**
     * @Route("/donnees", name="donnees")
     * @return Response
     */
    public function index(): Response{
            return $this->render("pages/donnees.html.twig");
    }
}