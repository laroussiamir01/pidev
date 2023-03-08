<?php

namespace App\Form;

use App\Form\UsersType;
use App\Entity\Reclamation;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('message')
             ->add('users' , EntityType::class,[
                'class' => Users::class ,
                'choice_label'=>'email'
                ])

           
       /*  ->add('users',EntityType::class, [
        'class' => Users::class,
          'label' => 'message'  ]); */

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
