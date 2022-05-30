<?php

namespace App\Controller\Admin;

use App\Entity\Geleding;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         $url = $adminUrlGenerator->setController(GeledingCrudController::class)->generateUrl();

         return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('KSA Izegem');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Geledingen', 'fa fa-tags', Geleding::class);
    }
}
