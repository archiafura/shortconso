<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfessionnelsController extends Controller
{
    /**
     * @Route("/professionnels", name="professionnels")
     */
    public function index()
    {
        return $this->render('professionnels/index.html.twig', [
            'controller_name' => 'ProfessionnelsController',
        ]);
    }
}
