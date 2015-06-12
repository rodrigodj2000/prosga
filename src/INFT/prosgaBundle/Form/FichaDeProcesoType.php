<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichaDeProcesoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigoDeFicha', 'text', array('label' => 'Código de Ficha: '))
            ->add('nombre', 'text', array('label' => 'Nombre: '))
            ->add('fechaDeEmision', 'date', array('label' => 'Fecha de Emisión: '))
            ->add('fechaDeRevision', 'date', array('label' => 'Fecha de Revisión: '))
            ->add('nroDeRevision', array('label' => 'Nº Revisión: '))
            ->add('objetivo')
            ->add('alcance')
            ->add('fichaDeProcesoAntecesor')
            ->add('fichaDeProcesoPredecesor')
            ->add('personaPrepara', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Prepara: ', 
                                                        'attr' => array('class' => 'form-control')
                                                  ))
            ->add('personaAprueba', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Aprueba: ', 
                                                        'attr' => array('class' => 'form-control')
                                                  ))
            ->add('personaResponsable', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Responsable: ', 
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
            'data_class' => 'INFT\prosgaBundle\Entity\FichaDeProceso'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_fichadeproceso';
    }
}
