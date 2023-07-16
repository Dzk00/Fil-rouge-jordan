<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'label' => 'Votre nom :',
            'attr' => [
                'placeholder' => 'Nom du particulier ou de la structure',
            ],
        ])
        ->add('email', EmailType::class, [
            'label' => 'Votre mail :',
            'attr' => [
                'placeholder' => 'Veuillez entrer une adresse mail valide',
            ],
        ])
        ->add('message', TextareaType::class, [
            'label' => 'Votre message :',
            'attr' => [
                'placeholder' => 'Merci de fournir les informations nécessaires pour vous recontacter',
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
