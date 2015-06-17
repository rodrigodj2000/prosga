<?php

namespace INFT\prosgaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MatrizLegalAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('emisor')
            ->add('descripcion')
            ->add('vencimiento')
            ->add('observacion')
            ->add('autoridadAAplicar')
            ->add('obligaciones')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('emisor')
            ->add('descripcion')
            ->add('vencimiento')
            ->add('observacion')
            ->add('autoridadAAplicar')
            ->add('obligaciones')
            ->add('_action', 'actions', array(
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
            ->add('emisor')
            ->add('descripcion', 'textarea', array('required' => false))
            ->add('vencimiento', 'date', array('data' => new \DateTime('now')))
            ->add('observacion', 'textarea', array('required' => false))
            ->add('autoridadAAplicar')
            ->add('obligaciones', 'text', array('required' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre')
            ->add('emisor')
            ->add('descripcion')
            ->add('vencimiento')
            ->add('observacion')
            ->add('autoridadAAplicar')
            ->add('obligaciones')
        ;
    }
}
