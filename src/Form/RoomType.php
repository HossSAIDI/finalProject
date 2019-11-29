<?php

namespace App\Form;

use App\Entity\Room;
use App\Entity\Region;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class RoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('summary', TextType::class, [
                'label' => "Résumé",
                'attr' => ["class" => "form-control"]
            ])
            ->add('description', TextareaType::class, [
                'label' => "Description",
                'attr' => ["class" => "form-control"]
            ])
            ->add('capacity', IntegerType::class, [
                'label' => "Capacité",
                'attr' => ["class" => "form-control"]
                
            ])
            ->add('superficy', NumberType::class, [
                'label' => "Superficie",
                'attr' => ["class" => "form-control"]
            ])
            ->add('price', NumberType::class, [
                'label' => "Prix",
                'attr' => ["class" => "form-control"]
            ])
            ->add('address', TextareaType::class, [
                'label' => "Adresse",
                'attr' => ["class" => "form-control"]
            ])
            ->add('region', EntityType::class, [
                'class' => Region::class,
                'attr' => ['class' => 'form-control']
            ])
            ->add('imageName', TextType::class,  [
                'label' => "Nom de l'image",
                'disabled' => false,
                'attr' => ["class" => "form-control"]
            ])
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'attr' => ["class" => "form-control"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Room::class,
        ]);
    }
}
