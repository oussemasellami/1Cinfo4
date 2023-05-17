<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassController extends AbstractController
{
    #[Route('/class', name: 'app_class')]
    public function index(): Response
    {
        return $this->render('class/index.html.twig', [
            'controller_name' => 'ClassController',
        ]);
    }


    #[Route('/liste/{id}', name: 'app_class')]
    public function listeid($id): Response
    {
        return $this->render('class/id.html.twig', array('x' => $id));
    }



    #[Route('/getNom', name: 'app_class1')]
    public function getNom(): Response
    {
        $student = "ahmed";


        $formations = array(
            array(
                'ref' => 'form147', 'Titre' => 'Formation Symfony
            4', 'Description' => 'formation pratique',
                'date_debut' => '12/06/2020', 'date_fin' => '19/06/2020',
                'nb_participants' => 5
            ),
            array(
                'ref' => 'form177', 'Titre' => 'Formation SOA',
                'Description' => 'formation theorique', 'date_debut' => '03/12/2020', 'date_fin' => '10/12/2020',
                'nb_participants' => 0
            ),
            array(
                'ref' => 'form178', 'Titre' => 'Formation Angular',
                'Description' => 'formation theorique', 'date_debut' => '10/06/2020', 'date_fin' => '14/06/2020',
                'nb_participants' => 12
            )
        );



        return $this->render('class/list.html.twig', array('st' => $student, 'fr' => $formations));
    }
}