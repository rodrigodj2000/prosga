<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TiposIncidenciasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fichaDeProceso', 'entity', array(
                'label' => 'Ficha de Proceso *: ',
                'class' => 'prosgaBundle:FichaDeProceso',
                'attr' => array('class' => 'form-control')
                )) 
            ->add('personaResponsable', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Responsable: ', 
                                                        'attr' => array('class' => 'dropdown, form-control')
                                                  ))                
            ->add('nombre', 'text', array(
                'label' => 'Indicador: ',
                'attr' => array('class' => 'form-control')
            ))                
            ->add('valorPermitido', 'integer', array(
                    'label' => 'Valor Permitido: ',
                    'attr' => array('class' => 'form-control'),
                    'required' => false
                    ))
            ->add('frecuencia', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Frecuencia',
                                                        'label' => 'Frecuencia: ', 
                                                        'attr' => array('class' => 'dropdown, form-control')
                                                  ))      
            ->add('descripcion', 'textarea',array(
                'label' => 'Objetivo: ',                
                'attr' => array(
                    'class' => 'tinymce form-control',
                    'data-theme' => 'custom'
                    )
            ))
            ->add('observacion', 'textarea',array(
                'label' => 'Observaciones: ',                
                'attr' => array(
                    'class' => 'form-control',
                    'data-theme' => 'custom'
                    )
            ))                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'INFT\prosgaBundle\Entity\TiposIncidencias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_tiposincidencias';
    }
}
