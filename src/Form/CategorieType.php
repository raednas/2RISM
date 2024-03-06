<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotEqualTo;
use Symfony\Component\Validator\Constraints\Regex;
class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nomcategorie', null, [
            'constraints' => [
                new NotBlank(['message' => 'Please enter a category name.']),
                new Length([
                    'min' => 5,
                    'max' => 255,
                    'maxMessage' => 'The category name cannot be longer than {{ limit }} characters.'
                    
                ]),
                new Regex([
                    'pattern' => '/^[a-zA-Z\s]+$/',
                    'message' => 'Le nom de la catégorie ne peut contenir que des lettres et des espaces.'
                ]),
                new NotEqualTo([
                    'value' => 'admin',
                    'message' => 'The category name cannot be "admin".'
                ]),
                // Ajoutez d'autres contraintes au besoin
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
