<?php

namespace App\Form;

use App\Entity\Hospitalisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HospitalisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('DateEntree')
            ->add('DateSortie')
            ->add('FraisSejour')
            ->add('idHospitalisation')
            ->add('service',ChoiceType::class, [
                'choices' => [
                    'Cardiology' => 'cardiology',
                    'Neurology' => 'neurology',
                    'Hepatology' => 'hepatology',
                    'Pediatrics' => 'pediatrics',
                ],
                'required' => true,
                'placeholder' => 'Choose a status',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hospitalisation::class,
        ]);
    }
}
