<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Nom_user' , TextType::class, [
            'label' => ' ',
            'attr' => [
                'placeholder' => 'Nom',
            ],
            'required' => false,
        ] )
        ->add('email' ,TextType::class, [
            'label' => ' ',
            'attr' => [
                'placeholder' => 'email',
            ],
            'required' => false,
        ] )
        /* ->add('id' ,TextType::class, [
            'label' => ' ',
            'attr' => [
                'placeholder' => 'id',
            ],
            'required' => false,
        ] ) */
       /*  ->add('reclamations' ,EntityType::class, [
            'label' => ' ',
           
            'class' => Reclamation::class ,
            'required' => false,
            'choice_label'=>'message'
        ] ) */
        
        ->add('search', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
