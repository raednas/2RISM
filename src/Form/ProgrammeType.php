<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use App\Entity\Programme;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType; // Correction de l'importation de TextType
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class ProgrammeType extends AbstractType
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('descriptionProgramme', TextType::class, [
            'label' => 'Description du programme',
            'constraints' => [
                new Assert\NotBlank(['message' => 'Veuillez saisir la description du programme.']),
                new Assert\Length([
                    'min' => 10,
                    'max' => 255,
                    'maxMessage' => 'La description du programme ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('imageFile', FileType::class, [
            'label' => 'Image (fichiers JPEG/PNG)',
            'required' => false,
            'mapped' => false,
            'constraints' => [
                new Assert\File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                    ],
                    'mimeTypesMessage' => 'Veuillez télécharger une image JPEG ou PNG valide.',
                ]),
            ],
        ])
        ->add('duree', DateTimeType::class, [
            'label' => 'Durée',
            'widget' => 'single_text',
            'html5' => true,
            'attr' => ['class' => 'datetimepicker'],
            'constraints' => [
                new Assert\NotBlank(['message' => 'Veuillez sélectionner la durée du programme.']),
                new GreaterThan([
                    'value' => 'now', // La date actuelle
                    'message' => 'La durée du programme doit être ultérieure à la date actuelle.'
                ]),
            ],
        ])
          ->add('prix', MoneyType::class, [
            'label' => 'Prix',
            'constraints' => [
                new NotBlank(['message' => 'Veuillez saisir le prix du pack.']),
                new GreaterThanOrEqual(['value' => 0, 'message' => 'Le prix du pack doit être supérieur ou égal à 0.']),
            ]
        ])
        ->add('categorie', ChoiceType::class, [
            'label' => 'Catégorie',
            'choices' => $options['categories'],
            'choice_label' => function (Categorie $categorie) {
                return $categorie->getNomcategorie();
            },
            'constraints' => [
                new Assert\NotBlank(['message' => 'Veuillez sélectionner la catégorie du programme.']),
            ],
        ])
           ->add('disponible', CheckboxType::class, [
            'label' => 'Disponible',
            'required' => false, // Rend le champ facultatif
        ]);
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Programme::class,
            'categories'=>[],
        ]);
    }

    
}
