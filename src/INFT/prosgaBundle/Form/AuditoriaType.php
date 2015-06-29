<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuditoriaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array('label' => 'Nombre *: ',
                                            'attr' => array('class' => 'form-control')
                                            ))
            ->add('fechaDeAuditoria', 'date', array('label' => 'Fecha *: ',
                                                    'data' => new \DateTime('now')) 
                                                  )
            ->add('costoAuditoria', 'integer', array('label' => 'Costo *: ', 
                                                     'attr' => array('class' => 'form-control')
                                                  ))
            ->add('personaResponsable', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Responsable *: ', 
                                                        'attr' => array('class' => 'form-control')
                                                  ))
            ->add('sector', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Sector',
                                            'label' => 'Sector *: ',
                                            'attr' => array('class' => 'form-control')
                                            ))
            ->add('estado', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Estado',
                                            'label' => 'Estado : ',
                                            'attr' => array('class' => 'form-control'),
                                            'required' => false
                                           ))
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
            'data_class' => 'INFT\prosgaBundle\Entity\Auditoria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_auditoria';
    }
}
