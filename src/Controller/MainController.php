<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Form\AlimentType;
use App\Repository\AlimentRepository;
use App\Repository\CampusRepository;
use App\Repository\EtatRepository;
use App\Repository\LieuRepository;
use App\Repository\UserRepository;
use App\Repository\VilleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(  Request $request,
                            EntityManagerInterface $em,
                            UserRepository $userRepository,
                            AlimentRepository $alimentRepository
                            )
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $proprietaire = $this->getUser();

        $aliment = new Aliment();
        $alimentForm = $this->createForm(AlimentType::class, $aliment);

        $alimentForm->handleRequest($request);

        if ($alimentForm->isSubmitted() && $alimentForm->isValid()) {

            $aliment->setProprietaire($proprietaire);

            $em->persist($aliment);
            $em->flush();
        }

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'alimentForm' => $alimentForm->createView()
        ]);
    }
}
