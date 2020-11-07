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
     * @Annotation "Fonction qui affiche la liste des aliments d'un utilisateur et permet l'ajout d'un aliment"
     */
    public function index(  Request $request,
                            EntityManagerInterface $em,
                            UserRepository $userRepository,
                            AlimentRepository $alimentRepository
                            )
    {
        // L'utilisateur est obligé d'être authentifié pour accéder à la page
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Récupère l'utilisateur actuel
        $proprietaire = $this->getUser();

        /*
         * Création du formulaire et traitement d'un aliment saisie
         */

        // Initialisation d'un nouvel aliment
        $aliment = new Aliment();
        $alimentForm = $this->createForm(AlimentType::class, $aliment);

        $alimentForm->handleRequest($request);

        // Si le formulaire est saisie et valide alors
        if ($alimentForm->isSubmitted() && $alimentForm->isValid()) {

            // Récupère l'utilisateur actuel de la page
            $aliment->setProprietaire($proprietaire);

            // Ajoute l'aliment en base
            $em->persist($aliment);
            $em->flush();

            // Redirige l'utilisateur sur la page home
            return $this->redirectToRoute('home');
        }

        /*
         * Récupère tout les aliments du propriétaire actuel trié par date de péremption
         */
        $aliments = $alimentRepository->findBy(["proprietaire" => $this->getUser()->getId()],['datePeremption'=>'ASC']);

        // Affiche la page d'accueil et attribut des variables à réutiliser dans le twig
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
     * @Annotation "Méthode qui supprime un aliment d'un utilisateur et le passe en aliment archivé
     *              avec l'id de l'aliment en paramètre"
     */
    public function deleteAliment(  int $id,
                                    Request $request,
                                    EntityManagerInterface $em,
                                    UserRepository $userRepository,
                                    AlimentRepository $alimentRepository,
                                    AlimentArchiveRepository $alimentArchiveRepository
    )
    {
        // Récupère l'id de l'aliment cliqué par l'utilisateur
        $aliment = $alimentRepository->find($id);

        // Récupère des informations concernant l'aliment qui va être archivé (user, nom et date de péremption)
        $proprietaire = $aliment->getProprietaire();
        $nom = $aliment->getNom();
        $datePeremption = $aliment->getDatePeremption();

        // Création d'un enregistrement "Aliment archivé" à inscrire en base
        $alimentArchive = new AlimentArchive();

        // Attribution des différents éléments récupérer via l'id de l'aliment à archiver
        $alimentArchive->setProprietaire($proprietaire);
        $alimentArchive->setNom($nom);
        $alimentArchive->setDatePeremption($datePeremption);

        // Création de l'aliment archivé dans la table correspondante
        $em->persist($alimentArchive);
        $em->flush();

        // Suppression de l'aliment dans la table aliments
        $em->remove($aliment);
        $em->flush();

        // Redirige l'utilisateur sur la page home
        return $this->redirectToRoute('home');
    }

}
