<?php

namespace App\Form;

use App\Entity\Gite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('surface')
            ->add('nbChambres')
            ->add('nbLits')
            ->add('acceptAnimaux')
            ->add('tarifAnimaux')
            ->add('image')
            ->add('ville')
            ->add('proprietaire')
            ->add('contact')
            ->add('prix')
            ->add('equipementExterieur')
            ->add('service')
            ->add('equipementInterieur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
