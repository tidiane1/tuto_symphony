<?php

namespace SNT\immobilierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class UtilisateurEntiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomcomplet')
        ->add('login')
        ->add('datenaiss',DateType::class,array('widget'=>'single_text'))
        ->add('roles')
        ->add('Enregistrer',SubmitType::class,array('label'=>'Enregistrer'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SNT\immobilierBundle\Entity\UtilisateurEntite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'snt_immobilierbundle_utilisateurentite';
    }


}
