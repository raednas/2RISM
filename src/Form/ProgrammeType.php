<?php

namespace App\Form;

use App\Entity\Programme;
use App\Entity\Categorie; // Importez l'entité Categorie
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Doctrine\ORM\EntityManagerInterface; // Importez EntityManagerInterface
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

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
            ->add('descriptionProgramme')
            ->add('imageFile', FileType::class, [
                'label' => 'Image (JPEG/PNG files)',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image',
                    ]),
                ],
            ])
            ->add('duree', DateTimeType::class, [
                'label' => 'Duration',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'datetimepicker'], // Ajouter la classe datetimepicker pour activer le datetimepicker
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Category',
                'choices' => $options['categories'],
                'choice_label' => function (Categorie $categorie) {
                    return $categorie->getNomcategorie();
                },
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
