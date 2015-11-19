<?php

namespace WildPartyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SoireeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description', 'textarea', array('required' => false))
            ->add('dateDebut')
            ->add('nb_place',  'number', array('label' => 'Nombre de places (-1 = illimité)'))
            ->add('prix', 'number', array('required'=>false))
            ->add('type')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WildPartyBundle\Entity\Soiree'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wildpartybundle_soiree';
    }
}
