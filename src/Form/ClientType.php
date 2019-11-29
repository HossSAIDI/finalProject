<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => "Prénom",
                'attr' => ["class" => "form-control"]
            ])
            ->add('familyName', TextType::class, ['label' => "Nom de famille",
                'attr' => ["class" => "form-control"]])
             ->add('gender', TextType::class, ['label' => "Genre (M ou F)",
                 'attr' => ["class" => "form-control"]])
            ->add('country', TextType::class, ['label' => "Code pays",
                 'attr' => ["class" => "form-control"]])
            ->add('phoneNumber', TextType::class, ['label' => "Numéro de téléphone",
                'attr' => ["class" => "form-control"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
