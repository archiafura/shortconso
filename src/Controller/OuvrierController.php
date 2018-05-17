<?php

namespace App\Controller;

use App\Entity\Ouvriers;
use function Sodium\add;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class OuvrierController extends Controller
{
    /**
     * @Route("/ouvriers", name="ouvriers")
     */
    public function index()
    {
        return $this->render('ouvriers/index.html.twig', [
            'controller_name' => 'OuvrierController',
        ]);
    }


    /**
     * @Route("/ouvriers/formulaire", name="ouvriers_formulaire")
     */

    public function formulaire(Request $requete)
    {
        $ouvrier = new Ouvriers();
        $ouvrier->setName('Pronuptia');
        $ouvrier->setCategorie('Robes de mariée');
        $ouvrier->setSiret(125436789);

        $formulaire = $this->createFormBuilder($ouvrier)
            ->add('name', TextType::class)
            ->add('categorie', TextType::class)
            ->add('siret', NumberType::class)
            ->add('envoyer', SubmitType::class, array('label' => 'Inscrire professionnel'))
            ->getForm();



            $formulaire->handleRequest($requete);

            if ($formulaire->isSubmitted() && $formulaire->isValid()) {
                $ouvrier = $this->getData();



                return $this->redirectToRoute('ouvriers_formok', array('id' => $ouvrier->getId()));

            }


        return $this->render('ouvriers/index.html.twig', array('formulaire' => $formulaire->createView()));


    }

    /**
     * @Route("/formok", name="ouvriers_formok")
     */

    public function formulaireOk ()
    {
        return $this->render('formok/index.html.twig');
    }


}
