<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Materiel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;  
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('libelle' , TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'libelle',
                ],
                'required' => false,
            ] )
            ->add('type' ,TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'type',
                ],
                'required' => false,
            ] )
            ->add('prix' ,TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'prix',
                ],
                'required' => false,
            ] )
            ->add('fournisseur' ,EntityType::class, [
                'label' => ' ',
               
                'class' => Fournisseur::class ,
                'required' => false,
                'choice_label'=>'nom'
            ] )
            
            ->add('search', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materiel::class,
        ]);
    }
}
