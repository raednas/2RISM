<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('datedebut', DateType::class, [
            'widget' => 'single_text', // Use a single text input for date selection
            'html5' => true, // Use HTML5 date input
            'format' => 'yyyy-MM-dd', // Format of the date
            // You can customize more options if needed
        ])
        ->add('datefin', DateType::class, [
            'widget' => 'single_text',
            'html5' => true,
            'format' => 'yyyy-MM-dd',
            // Additional options
        ])
            ->add('idv')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
