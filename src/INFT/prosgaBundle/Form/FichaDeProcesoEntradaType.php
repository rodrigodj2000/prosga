<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichaDeProcesoEntradaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fichaDeProceso', 'entity', array('class' => 'INFT\prosgaBundle\Entity\FichaDeProceso',
                                                    'label' => 'Ficha de Proceso *: ',
                                                    'attr' => array('class' => 'form-control')))  
            ->add('valoresDeEntrada', 'text', array('label' => 'Valores de Entrada *: ',
                                                   'attr' => array('class' => 'form-control')))
            ->add('observacion', 'textarea', array('label' => 'Observaciones: ', 
                                                   'attr' => array(
                                                        'class' => 'tinymce form-control',
                                                        'data-theme' => 'custom'
                                                        ),
                                                   'required' => false
                                                  ))  
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'INFT\prosgaBundle\Entity\FichaDeProcesoEntrada'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_fichadeprocesoentrada';
    }
}
