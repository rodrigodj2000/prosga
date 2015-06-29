<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IncidenciasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoIncidencia', 'entity', array(
                'label' => 'Tipo de Incidencia: ',
                'class' => 'prosgaBundle:TiposIncidencias',
                'attr' => array('class' => 'form-control')
            ))                
            ->add('fecha', 'date', array(
                'label' => 'Fecha: ',
                'data' => new \Datetime('now')
                ))
                
            ->add('detalle', 'textarea',array(
                'label' => 'Detalle: ',                
                'attr' => array(
                    'class' => 'tinymce form-control',
                    'data-theme' => 'custom'
                    )
            ))
            ->add('valor', 'integer', array(
                'label' => 'Valor: ',
                'attr' => array('class' => 'form-control')
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'INFT\prosgaBundle\Entity\Incidencias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_incidencias';
    }
}
