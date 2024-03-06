<?php

namespace App\Form;

use App\Entity\Pack;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\{FileType, TextType, TextareaType, MoneyType, DateType, ChoiceType, CheckboxType};
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\{NotBlank, Length, GreaterThanOrEqual, File};
use App\Entity\Typepack;
class PackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Nom_pack', TextType::class, [
            'label' => 'Nom du pack',
            'constraints' => [
                new NotBlank(['message' => 'Veuillez saisir le nom du pack.']),
                new Length(['max' => 255, 'maxMessage' => 'Le nom du pack ne peut pas dépasser {{ limit }} caractères.']),
            ]
        ])
        ->add('Type_pack', ChoiceType::class, [
            'label' => 'Type de pack',
            'choices' => $options['types'],
            'choice_label' => function (Typepack $typepack) {
                return $typepack->getNomTypePack();
            },
            'constraints' => [
                new NotBlank(['message' => 'Veuillez sélectionner un type de pack.']),
            ]
        ])
        ->add('Description_pack', TextareaType::class, [
            'label' => 'Description du pack',
            'constraints' => [
                new NotBlank(['message' => 'Veuillez saisir la description du pack.']),
            ]
        ])
        ->add('Prix', MoneyType::class, [
            'label' => 'Prix',
            'constraints' => [
                new NotBlank(['message' => 'Veuillez saisir le prix du pack.']),
                new GreaterThanOrEqual(['value' => 0, 'message' => 'Le prix du pack doit être supérieur ou égal à 0.']),
            ]
        ])
        ->add('Date', DateType::class, [
            'label' => 'Date',
            'widget' => 'single_text',
            'html5' => true,
            'data' => new \DateTime(),
            'constraints' => [
                new NotBlank(['message' => 'Veuillez sélectionner la date du pack.']),
                // Ajoutez d'autres contraintes de validation au besoin
            ],
        ])
        ->add('Image', FileType::class, [
            'label' => 'Image (fichiers JPEG/PNG)',
            'required' => false, // le champ n'est pas requis
            'mapped' => false, // ne pas mapper ce champ à l'entité
            'multiple' => false, // autoriser uniquement un fichier à être téléchargé
            'constraints' => [
                new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                    ],
                    'mimeTypesMessage' => 'Veuillez télécharger un fichier JPEG ou PNG valide',
                ]),
            ],
        ])
        ->add('disponible', CheckboxType::class, [
            'label' => 'Disponible',
            'required' => false, // Not required
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pack::class, // Utilisation de l'entité Pack
            'types' => [], // Définit une option 'types' par défaut comme un tableau vide
        ]);
    }
}