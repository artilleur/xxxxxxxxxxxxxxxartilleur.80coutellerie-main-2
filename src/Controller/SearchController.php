<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request, ProduitRepository $repo): Response
    {
        //recup la valeur de l'input qui a pour name search (notre barre de recherche)
        $query = $request->request->get('search');
        $produit =null;
        if($query) {
            $produit = $repo->findProduitByName($query);
        }

        return $this->render('search/index.html.twig', [
            'produits' => $produit
        ]);
    }
}