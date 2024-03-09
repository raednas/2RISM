<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_event', ChoiceType::class, [
                'choices' => [
                    'Culturelle' => 'culturelle',
                    'Musical' => 'musical',
                    'RoadTrip' => 'RoadTrip',
                ],
                'placeholder' => 'Choisir un type d\'événement',
                'required' => true,
            ])
            ->add('duree_event')
            ->add('date_event')
            ->add('nom_event')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}