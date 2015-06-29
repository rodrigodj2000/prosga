<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActividadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array('label' =>'Nombre *: ',
                                        'attr'=> array('class' => 'form-control')
                                        ))
            ->add('fechaActividad', 'date', array('label' => 'Fecha *: ',
                                                 'data' => new \DateTime('now'))
                                        )
            ->add('aspectoAmbiental', 'text', array('label' => 'Aspecto Ambiental: ',
                                                    'attr' => array('class' => 'form-control'),
                                                    'required' => false
                                                    ))
            ->add('accionPrevencion', 'text', array('label' => 'Acción Prevención: ',
                                                    'attr' => array('class' => 'form-control'),
                                                    'required' => false
                                                    ))
            ->add('proceso', 'entity', array('class'=> 'INFT\prosgaBundle\Entity\Proceso',
                                             'label' => 'Proceso',
                                             'attr' => array('class' => 'dropdown, form-control'),
                                             'required' => false
                                             ))
            ->add('observacion', 'textarea', array('label' => 'Observación: ',
                                                    'attr' => array(
                                                        'class' => 'tinymce form-control',
                                                        'data-theme' => 'custom'
                                                        ),
                                                    'required' => false
                                            ))
            
            ->add('personaResponsable', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                   'label' => 'Responsable *: ', 
                                                   'attr' => array('class' => 'dropdown, form-control')
                                                  ))
            ->add('sector', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Sector',
                                            'label' =>'Sector *: ',
                                            'attr' => array( 'class' => 'dropdown, form-control')
                                            ))
            ->add('norma', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Norma',
                                            'label' => 'Norma *: ',
                                            'attr' => array('class' => 'dropdown, form-control')
                                            ))
            ->add('matrizlegal', 'entity', array('class' => 'INFT\prosgaBundle\Entity\MatrizLegal',
                                                'label' => 'Matriz Legal : ',
                                                'attr' => array('class' => 'dropdown, form-control'),
                                                'required' => false
                                                ))
            ->add('control', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Control',
                                            'label' => 'Control: ',
                                            'attr' => array('class' => 'dropdown, form-control'),
                                            'required' => false
                                            ))
            ->add('auditoria', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Auditoria',
                                            'label' => 'Auditoria *: ',
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
            'data_class' => 'INFT\prosgaBundle\Entity\Actividad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_actividad';
    }
}
