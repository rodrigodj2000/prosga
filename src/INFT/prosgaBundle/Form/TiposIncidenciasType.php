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
                'label' => 'Ficha de Proceso: ',
                'class' => 'prosgaBundle:FichaDeProceso',
                'attr' => array('class' => 'form-control')
                ))                
            ->add('nombre', 'text', array(
                'label' => 'Tipo de Incidencia: ',
                'attr' => array('class' => 'form-control')
            ))
            ->add('valorPermitido', 'integer', array(
                    'label' => 'Valor Permitido: ',
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
