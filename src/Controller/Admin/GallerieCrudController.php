<?php

namespace App\Controller\Admin;

use App\Entity\Gallerie;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GallerieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gallerie::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield ImageField::new('imageFile')
            ->setLabel('Image à ajouter à la gallerie')
            ->setUploadDir('public/images/gallery') 
            ->setBasePath('/images/gallery') 
            ->onlyOnForms();
    
        yield ImageField::new('image')
            ->setLabel('Image')
            ->setBasePath('/images/gallery') 
            ->onlyOnDetail(); 
        yield TextField::new('imageName')
        ->hideOnForm();
    }
}
