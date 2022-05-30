<?php

namespace App\Controller\Admin;

use App\Entity\Geleding;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GeledingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Geleding::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IntegerField::new('rangschikking')->hideOnForm();
        yield TextField::new('naam')->hideOnForm();
        yield EmailField::new('email');
        yield TelephoneField::new('gsm');
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_INDEX, Action::DELETE);
    }
}
