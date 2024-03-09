<?php

namespace App\Form;

use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Hebergement1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_hebergement', ChoiceType::class, [
                'choices' => [
                    'hotel' => 'hotel',
                    'maison dhaute' => 'maison dhaute',
                    'air bnb' => 'air bnb',
                ],
                'placeholder' => 'type hebergement',
            ])
            ->add('emplacement')
<<<<<<< HEAD
            ->add('name')
            ->add('prix')
=======
>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44
            ->add('nbr_etoile')
            ->add('description', TextareaType::class, [
                'attr' => ['rows' => 5], // Set rows to 3 for textarea
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
        ]);
    }
}
