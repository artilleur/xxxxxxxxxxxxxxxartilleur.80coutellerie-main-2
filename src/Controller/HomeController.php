<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\SousCategorie;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategorieRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        // ça c'est la pagination
        // $categories = $paginator->paginate( $repo->findAll(),
        // $request-> query->getInt('page', 1),
        // 2);


        $categories =  $repo->findAll();

        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            "chemin_de_fer" => [ 
                [ "name" => "acceuil", "link" => ""]
                ]

        ]);
    }

    #[Route('/categorie/{categorie}', name: 'app_categorie')]
    public function categorie(Categorie $categorie): Response
    {
  

        
                
        return $this->render('home/SousCategorie.html.twig', [
            "categorie" => $categorie,
            "chemin_de_fer" => [ 
                [ "name" => "acceuil", "link" => "/"],
                [ "name" =>$categorie->getNom() , "link" => ""]
                

                ]
        ]);
    }

    #[Route('/souscategorie/{sousCategorie}', name: 'app_souscategorie')]
    public function souscategorie(SousCategorie $sousCategorie): Response
    {
        
        return $this->render('home/produits.html.twig', [
            "sousCategorie" => $sousCategorie,
            "chemin_de_fer" => [ 
                [ "name" => "acceuil", "link" => "/"],
                [ "name" => $sousCategorie->getCategorie()->getNom(), "link" => "/categorie/".$sousCategorie->getCategorie()->getId()],
                [ "name" => $sousCategorie->getNom(), "link" => ""]
                
            ]
        ]);
    }

    #[Route('/produit/{produit}', name: 'app_produit')]
    public function produit(Produit $produit): Response
    {
        $sousCategorie=$produit->getSousCategorie();
        return $this->render('home/produit.html.twig', [
            
            "produit" => $produit, 
            "sousCategorie" => $sousCategorie,
            "chemin_de_fer" => [ 
                [ "name" => "acceuil", "link" => "/"],
                [ "name" => $sousCategorie->getCategorie()->getNom(), "link" => "/categorie/".$sousCategorie->getCategorie()->getId()],
                [ "name" => $produit->getSousCategorie()->getNom(), "link" => "/souscategorie/".$produit->getSousCategorie()->getId()],
                [ "name" => $produit->getNom(), "link" => ""]
                
            ]
        ]);
    }
}
