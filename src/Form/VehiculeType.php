<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('immatriculation')

            ->add('modele')
            ->add('nbr_places', ChoiceType::class, [ // Utilisez ChoiceType au lieu de TextType
                'label' => 'Nombre de places', // Label du champ dans le formulaire
                'choices' => [ // Les options de la liste déroulante
                    '3' => 3,
                    '5' => 5,
                    '7' => 7,
                ],
                'attr' => ['class' => 'form-control'], // Les attributs HTML supplémentaires
            ])


            ->add('couleur', ChoiceType::class, [ 
    'label' => 'Couleur du Voiture', 
    'choices' => [ 
        'Rouge' => 'rouge',
        'Vert' => 'vert',
        'Bleu' => 'bleu',
        'Gris' => 'Gris',
        'Blanc' => 'Blanc',
        'Noir' => 'Noir',
        'Gris Charbon' => 'Gris Charbon',
        // Ajoutez d'autres couleurs selon vos besoins
    ],
    'attr' => ['class' => 'form-control'], 
])


            ->add('prixdelocation')
            ->add('locationvoitures', EntityType::class, [
                'class' => 'App\Entity\Locationvoitures',
                'choice_label' => 'nom_agence',
                'label' => 'Location de voitures',
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '20048k',
                        'mimeTypes' => ['image/*'],
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }
}