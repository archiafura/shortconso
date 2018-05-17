<?php

namespace App\Controller;

use App\Entity\Profesionnels;
use function Sodium\add;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProfesionnelsController extends Controller
{
    /**
     * @Route("/profesionnels", name="profesionnels")
     */
    public function index()
    {
        return $this->render('profesionnels/index.html.twig', [
            'controller_name' => 'ProfesionnelsController',
        ]);
    }


    /**
     * @Route("/profesionnels/formulaire", name="profesionnels_formulaire")
     */



    public function formulaire(Request $requete)
    {
        $professionel = new Profesionnels();
        $professionel->setName('toto company');
        $professionel->setCategorie('Désanusseur de porc');
        $professionel->setSiret(00000000000000);

        $formulaire = $this->createFormBuilder($professionel)
            ->add('name', TextType::class)
            ->add('categorie', TextType::class)
            ->add('siret', NumberType::class)
            ->add('envoyer', SubmitType::class, array('label' => 'inscriptionpro'))
            ->getForm();

        $formulaire->handleRequest($requete);


        if ($formulaire->isSubmitted() && $formulaire->isValid()){
            $professionel = $formulaire->getData();

            return $this->redirectToRoute('profesionnels_formulaireOk');
        }

        return $this->render('profesionnels/index.html.twig',
            array(
                'formulaire' => $formulaire->createView()
            )
        );

    }


    /**
     * @Route("/profesionnels/formOk", name="profesionnels_formulaireOk")
     */

    public function formulaireOk()
    {
        return $this->render('profesionnels/formOk.html.twig');
    }
}