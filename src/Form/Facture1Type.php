<?php

namespace App\Form;

use App\Entity\Facture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThan;

class Facture1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'hotel' => 'hotel',
                    'maison haute' => 'maison haute',
                    'air bnb' => 'air bnb',
                ],
                'placeholder' => 'Choose an option',
            ])
            ->add('Date_Debut', DateType::class, [
                'constraints' => [
                    new GreaterThan([
                        'value' => 'today',
                        'message' => 'Please select a date that is after today.',
                    ]),
                ],
            ])
            ->add('Date_Fin', DateType::class, [
                'constraints' => [
                    new GreaterThan([
                        'value' => 'today',
                        'message' => 'Please select a date that is after today.',
                    ]),
                ],
            ])
            ->add('prix', MoneyType::class, [
                'currency' => 'EUR', // Set the currency if applicable
            ])
            ->add('nom')
            ->add('prenom')
            ->add('Adresse_mail', EmailType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}
