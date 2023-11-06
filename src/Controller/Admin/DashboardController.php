<?php

namespace App\Controller\Admin;

use App\Entity\Adresse;
use App\Entity\Produit;
use App\Entity\Commande;
use App\Entity\Categorie;
use App\Form\CommandeType;
use App\Entity\Utilisateur;
use App\Controller\AdresseController;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\AdresseCrudController;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\CategorieCrudController;
use App\Entity\SousCategorie;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin_index')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(DashboardController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Filrougeversion10 Main Main Mainterterter');
    }

    public function configureMenuItems(): iterable

    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
         yield MenuItem::linkToCrud('Categorie', 'fa-solid fa-shop', Categorie::class);
         yield MenuItem::linkToCrud('Produit', 'fa-brands fa-product-hunt', Produit::class);
         //yield MenuItem::linkToCrud('Adresse', 'fa-brands fa-product-hunt', Adresse::class);
         yield MenuItem::linkToCrud('Utilisateur', 'fa-brands fa-product-hunt', Utilisateur::class);
        // yield MenuItem::linkToCrud('Commande', 'fa-brands fa-product-hunt', Commande::class);
        yield MenuItem::linkToCrud('sous_Categorie', 'fa-solid fa-shop', SousCategorie::class);
        
    }
}

