<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Reservation1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname')
            ->add('country')
            ->add('email')
            ->add('mobile_number')
            ->add('reservation_date')
            ->add('explanation')
            ->add('dutch_bike')
            ->add('city_bike')
            ->add('e_bike')
            ->add('hybrid_bike')
            ->add('tandem_bike')
            ->add('touring_bike')
            ->add('kids_bike')
            ->add('kids_cargo')
            ->add('kids_child_seat')
            ->add('kids_tandem')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
