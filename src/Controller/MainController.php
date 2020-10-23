<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Entity\AlimentArchive;
use App\Form\AlimentType;
use App\Repository\AlimentArchiveRepository;
use App\Repository\AlimentRepository;
use App\Repository\UserRepository;
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

            return $this->redirectToRoute('home');
        }

        $aliments = $alimentRepository->findBy(["proprietaire" => !null],['datePeremption'=>'ASC']);

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            "aliments"=>$aliments,
            "user"=>$proprietaire,
            'alimentForm' => $alimentForm->createView()
        ]);
    }

    /**
     * @Route("/supprimer-aliment/{id}", name="delete")
     * @param int $id
     */
    public function deleteAliment(  int $id,
                                    Request $request,
                                    EntityManagerInterface $em,
                                    UserRepository $userRepository,
                                    AlimentRepository $alimentRepository,
                                    AlimentArchiveRepository $alimentArchiveRepository
    )
    {


        $aliment = $alimentRepository->find($id);

        $proprietaire = $this->getUser();
        $nom = $aliment->getNom();
        $datePeremption = $aliment->getDatePeremption();

        var_dump($nom);

        $alimentArchive = new AlimentArchive();
        $alimentArchive->setProprietaire($proprietaire);
        $alimentArchive->setNom($nom);
        $alimentArchive->setDatePeremption($datePeremption);

        $em->persist($alimentArchive);
        $em->flush();

        $em->remove($aliment);
        $em->flush();

        return $this->redirectToRoute('home');
    }

}
