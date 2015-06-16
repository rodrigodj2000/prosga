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
            ->add('nombre', 'text', array('label' => 'Nombre: ',
                                          'attr' => array('class' => 'form-control')
                                          ))
            ->add('codigoDeFicha', 'text', array('label' => 'Código de Ficha: ',
                                                  'attr' => array('class' => 'form-control')
                                                  ))
            ->add('norma',  'entity', array('class' => 'INFT\prosgaBundle\Entity\Norma',
                                            'label' => 'Norma: ',
                                            'attr' => array('class' => 'dropdown , form-control')))
            ->add('alcance', 'textarea', array('label' => 'Alcance: ',
                                                'attr' => array('class' => 'form-control')
                                                ))
            ->add('objetivo', 'textarea', array('label' => 'Objetivo: ',
                                            'attr' => array('class' => 'form-control')
                                            ))            
            ->add('fechaDeEmision', 'date', array('label' => 'Fecha de Emisión: '))
            ->add('fechaDeRevision', 'date', array('label' => 'Fecha de Revisión: '))
            ->add('nroDeRevision', 'integer' ,array('label' => 'Nº Revisión: ',
                                                    'attr' => array('class' => 'form-control')))            
            
            ->add('fichaDeProcesoAntecesor', 'entity', array('class' => 'INFT\prosgaBundle\Entity\FichaDeProceso',
                                                              'label' => 'Ficha de Proceso Antecesora: ',
                                                              'attr' => array('class' => 'dropdown, form-control')
                                                              ))
            ->add('fichaDeProcesoPredecesor', 'entity', array('class' => 'INFT\prosgaBundle\Entity\FichaDeProceso',
                                                              'label' => 'Ficha de Proceso Predecesora: ',
                                                              'attr' => array('class' => 'dropdown, form-control')
                                                              ))
            ->add('personaPrepara', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Prepara: ', 
                                                        'attr' => array('class' => 'dropdown, form-control')
                                                  ))
            ->add('personaAprueba', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Aprueba: ', 
                                                        'attr' => array('class' => 'dropdown, form-control')
                                                  ))
            ->add('personaResponsable', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Responsable: ', 
                                                        'attr' => array('class' => 'dropdown, form-control')
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
