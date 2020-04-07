<?php

namespace App\Form;

use App\Entity\CompetenceBelt;
use App\Entity\Domain;
use App\Entity\SubDomain;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubDomainType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name')
            ->add('domain', EntityType::class, [
                'class' => Domain::class,
                'choice_label' => 'name',
            ])
            ->add('belt', EntityType::class, [
                'class' => CompetenceBelt::class,
                'choice_label' => 'color',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubDomain::class,
        ]);
    }
}
