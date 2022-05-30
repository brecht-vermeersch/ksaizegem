<?php

namespace App\Controller\Admin;

use App\Entity\Geleding;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
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
        yield TextField::new('afkorting')->hideOnForm();
        yield EmailField::new('email');
        yield TelephoneField::new('gsm');
    }
}
