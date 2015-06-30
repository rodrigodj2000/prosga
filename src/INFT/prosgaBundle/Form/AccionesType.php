<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccionesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha', 'date', array('label' => 'Fecha: ',
                                         'data' => new \Datetime('now')
                                        ))
            ->add('tipoIncidencia', 'entity', array(
                                                    'label' => 'Indicador:',
                                                    'class' => 'prosgaBundle:TiposIncidencias',
                                                    'attr' => array('class' => 'form-control')
                                                    ))
            ->add('analisisCausa', 'textarea', array('label' => 'Análisis de Causa: ',
                                                'attr' => array('class' => 'form-control')))
            ->add('planAccion', 'textarea', array('label' => 'Plan de Acción: ',
                                            'attr' => array('class' => 'form-control')))
            ->add('resultado', 'textarea', array('label' => 'Resultado: ',
                                                'attr' => array('class' => 'form-control')))
            ->add('efectiva', 'choice', array('label' => 'Efectiva:',
                                                'choices' => array(
                                                    '1' => 'Si',
                                                    '0' => 'No'
                                                ),
                                            'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'INFT\prosgaBundle\Entity\Acciones'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_acciones';
    }
}
