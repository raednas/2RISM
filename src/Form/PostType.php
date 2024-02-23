<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('description', null, [
            'constraints' => [
                new NotBlank(['message' => 'La description ne peut pas être vide.']),
            ],
        ])
        ->add('hashtag', null, [
            'constraints' => [
                new NotBlank(['message' => 'Le hashtag ne peut pas être vide.']),
                new Regex([
                    'pattern' => '/^#(\S+)$/', // Assurez-vous qu'il commence par "#" et n'a pas d'espaces
                    'message' => 'Le hashtag doit commencer par "#" et ne doit pas contenir des espaces.'
                ]),
            ],
        ])
        ->add('image_p', FileType::class, [
            'label' => 'Image (JPEG, PNG, GIF)',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new NotBlank(['message' => 'image ne peut pas être vide.']),
                new File([
                    'maxSize' => '1024k', // Taille maximale autorisée
                    'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'], // Types MIME autorisés
                    'mimeTypesMessage' => 'Veuillez télécharger un fichier image valide (JPEG, PNG, GIF).',
                ]),
            ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
