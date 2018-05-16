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
     * @Route("/ouvrier", name="ouvrier")
     */
    public function index()
    {
        return $this->render('ouvrier/index.html.twig', [
            'controller_name' => 'OuvrierController',
        ]);
    }


    /**
   * @Route("/ouvrier/formulaire", name="ouvrier_formulaire")
*/

public function  formulaire(Request $requete)
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

    if ($formulaire->isSubmitted() && $formulaire->isValid()){
        $ouvrier = $formulaire->getData();
        return $this->redirectToRoute('ouvrier_formOk');


    }

    return $this->render('ouvrier/index.html.twig' , array('formulaire' => $formulaire->createView()));


}

public function formulaireOk ()
{
    return $this->render('ouvrier_formOk.html.twig');
}


}
