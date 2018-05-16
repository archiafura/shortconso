<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrestationController extends Controller
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index()
    {
        return $this->render('prestation/index.html.twig', [
            'controller_name' => 'PrestationController',
        ]);
    }
}
