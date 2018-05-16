<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormOkController extends Controller
{
    /**
     * @Route("/form/ok", name="form_ok")
     */
    public function index()
    {
        return $this->render('form_ok/index.html.twig', [
            'controller_name' => 'FormOkController',
        ]);
    }
}
