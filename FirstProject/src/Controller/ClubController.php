<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\CarType;
use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    #[Route('/club', name: 'app_club')]
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    #[Route('/listcar', name: 'app_listcar')]
    public function listcar(CarRepository $carRepository): Response
    {
        $car = $carRepository->findAll();
        return $this->render('club/listcar.html.twig', array('cartwig' => $car));
    }

    #[Route('/listcarId/{id}', name: 'app_listcarId')]
    public function listcarId($id, CarRepository $carRepository): Response
    {
        //var_dump($id) . die();
        $car[] = $carRepository->find($id);
        //var_dump($car) . die();
        return $this->render('club/detailscar.html.twig', array('cartwigid' => $car));
    }

    #[Route('/add', name: 'app_add')]
    public function addndex(Request $req, CarRepository $carrepo): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $carrepo->save($car, true);
            return $this->redirectToRoute('app_listcar');
        }
        return $this->renderForm('club/add.html.twig', [
            'form' => $form

        ]);
    }

    #[Route('/update/{id}', name: 'app_update')]
    public function update(Request $req, CarRepository $carrepo, Car $car): Response
    {
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $carrepo->save($car, true);
            return $this->redirectToRoute('app_listcar');
        }
        return $this->renderForm('club/update.html.twig', [
            'car' => $car,
            'form' => $form
        ]);
    }

    #[Route('/liste', name: 'app_liste')]
    public function liste(): Response
    {
        $student = 'ahmed';


        $formations = array(
            array(
                'ref' => 'form147', 'Titre' => 'Formation Symfony
            4', 'Description' => 'formation pratique',
                'date_debut' => '12/06/2020', 'date_fin' => '19/06/2020',
                'nb_participants' => 19
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
        return $this->render('club/list.html.twig', array(
            'x' => $student,
            'listeclub' => $formations
        ));
    }

    #[Route('/listebyid/{id}', name: 'app_listebyid')]
    public function listebyid($id): Response
    {
        return $this->render('club/listid.html.twig', array('id' => $id));
    }
}
