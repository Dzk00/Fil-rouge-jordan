<?php

namespace App\Controller\Admin;

use App\Entity\Prestations;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminControllerTrait;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PrestationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Prestations::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('nom');
        yield TextareaField::new('descriptionCourte')
        ->hideOnForm();
        yield TextareaField::new('descriptionCourte')
        ->setLabel("Phrase d'accroche (Max 150 carac.)")
        ->onlyOnForms();
        yield TextareaField::new('description1')
        ->setLabel('Description (Max 500 carac.)')
        ->onlyOnForms();
        yield TextareaField::new('description2')
        ->setLabel('Description (Max 500 carac.)')
        ->onlyOnForms();
        yield TextareaField::new('description3')
        ->setLabel('Description (Max 100 carac.)')
        ->onlyOnForms();
        yield ImageField::new('imageFile')
            ->setLabel('Image (ne pas uploader une nouvelle image si vous modifiez un show)')
            ->setUploadDir('public/images/presta') 
            ->setBasePath('/images/presta') 
            ->onlyOnForms();
    
        yield ImageField::new('image')
            ->setLabel('Image')
            ->setBasePath('/images/presta') 
            ->onlyOnDetail(); 
            
        yield AssociationField::new('categorie');     
}
}
