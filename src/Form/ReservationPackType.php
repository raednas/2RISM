<?php

namespace App\Form;

use App\Entity\ReservationPack;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationPackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_debut', DateType::class, [
                'label' => 'Date de début de la réservation',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'yyyy-MM-dd',
                'attr' => ['class' => 'datepicker'],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\GreaterThan("today", message: "La date de début doit être ultérieure à aujourd'hui")
                ],
            ])
            ->add('date_fin', DateType::class, [
                'label' => 'Date de fin de la réservation',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'yyyy-MM-dd',
                'attr' => ['class' => 'datepicker'],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\GreaterThan(propertyPath: 'date_debut', message: "La date de fin doit être ultérieure à la date de début")
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationPack::class,
        ]);
    }
}
