<?php

namespace App\Form;

use App\Entity\Owner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OwnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('firstname',TextType::class, ['label' => "Prénom",
            'attr' => ["class" => "form-control"]])
            ->add('familyName',TextType::class, ['label' => "Nom de famille",
                'attr' => ["class" => "form-control"]])
                ->add('address',TextType::class, ['label' => "Adresse",
                    'attr' => ["class" => "form-control"]])
                    ->add('country',TextType::class, ['label' => "Code pays",
                        'attr' => ["class" => "form-control"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Owner::class,
        ]);
    }
}
