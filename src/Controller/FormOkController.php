<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormOkController extends Controller
{
    /**
     * @Route("/formok", name="formok")
     */
    public function index()
    {
        return $this->render('formok/index.html.twig', [
            'controller_name' => 'FormOkController',
        ]);
    }
}
