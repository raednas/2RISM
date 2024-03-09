<?php

namespace App\Form;

use App\Entity\Facture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThan;
=======
use Symfony\Component\Validator\Constraints as Assert;


>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44

class Facture1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
<<<<<<< HEAD
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
=======
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
                'placeholder' => 'Choose an option',
            ])
            ->add('Date_Debut')
            ->add('Date_Fin')
>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44
            ->add('prix', MoneyType::class, [
                'currency' => 'EUR', // Set the currency if applicable
            ])
            ->add('nom')
            ->add('prenom')
<<<<<<< HEAD
            ->add('Adresse_mail', EmailType::class);
=======
            ->add('Adresse_mail', EmailType::class)
        ;
>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}
