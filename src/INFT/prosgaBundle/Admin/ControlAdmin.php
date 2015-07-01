<?php

namespace INFT\prosgaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ControlAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('fecha')
            ->add('frecuencia')
            ->add('observacion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('fecha')
            ->add('frecuencia.nombre', 'string', array('label' => 'Frecuencia'))
            ->add('observacion')
            ->add('_action', 'actions', array('label' => 'Acciones',
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('fichaDeProceso', 'entity', array('class' => 'prosgaBundle:FichaDeProceso'))
            ->add('nombre')
            ->add('descripcion', 'textarea', array('required' => false))
            ->add('fecha', 'date')
            ->add('frecuencia', 'entity', array(
                'class' => 'prosgaBundle:Frecuencia',
                'property' => 'nombre',
            ))  
            ->add('observacion', 'textarea', array('required' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('fecha')
            ->add('frecuencia.nombre', 'string', array('label' => 'Frecuencia'))
            ->add('observacion')
        ;
    }
}
