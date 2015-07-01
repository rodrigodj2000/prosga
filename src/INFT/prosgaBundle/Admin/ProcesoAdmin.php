<?php

namespace INFT\prosgaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProcesoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('norma')
            ->add('estado')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('norma.nombre', 'string', array('label' => 'Norma'))
            ->add('alarma.nombre', 'string', array('label' => 'Alarma'))
            ->add('estado.nombre', 'string', array('label' => 'Estado'))
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
            ->add('nombre')
            ->add('norma', 'entity', array(
                'class' => 'prosgaBundle:Norma',
                'property' => 'nombre',
            ))
            ->add('alarma', 'entity', array(
                'class' => 'prosgaBundle:Alarma',
                'property' => 'nombre',
            ))
            ->add('estado', 'entity', array(
                'class' => 'prosgaBundle:Estado',
                'property' => 'nombre',
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre')
            ->add('norma.nombre', 'string', array('label' => 'Norma'))
            ->add('alarma.nombre', 'string', array('label' => 'Alarma'))
            ->add('estado.nombre', 'string', array('label' => 'Estado'))
        ;
    }
}
