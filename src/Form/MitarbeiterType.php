<?php

namespace App\Form;

use App\Entity\Mitarbeiter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MitarbeiterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nachname')
            ->add('vorname')
            ->add('geburtsdatum')
            ->add('email')
            ->add('telefon_nummer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mitarbeiter::class,
        ]);
    }
}
