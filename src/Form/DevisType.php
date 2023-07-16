<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Vous êtes :',
                'choices' => [
                    'Un particulier' => 'particulier',
                    'Une entreprise' => 'entreprise',
                    'Une association' => 'association',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('name', TextType::class, [
                'label' => 'Nom :',
                'attr' => [
                    'placeholder' => 'Nom du particulier ou de la structure',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email :',
                'attr' => [
                    'placeholder' => 'Veuillez entrer une adresse mail valide',
                ],
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Téléphone :',
                'attr' => [
                    'placeholder' => 'Veuillez entrer un numéro de téléphone valide',
                ],
            ])
            ->add('evenement', TextType::class, [
                'label' => 'Votre évènement :',
                'attr' => [
                    'placeholder' => 'Soirée de gala, mariage, anniversaire, etc',
                ],
            ])
            ->add('date', DateType::class, [
                'label' => 'Date de votre évènement :',
                'widget' => 'single_text',
            ])
            ->add('informationsSupplementaires', TextareaType::class, [
                'label' => 'Informations supplémentaires :',
                'attr' => [
                    'placeholder' => 'Vous pouvez inclure le nom du Show si vous avez une demande particulière sur celui-ci',
                ],
            ])
            ->add('consentement', CheckboxType::class, [
                'label' => 'En cochant cette case, j\'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en découler.',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
