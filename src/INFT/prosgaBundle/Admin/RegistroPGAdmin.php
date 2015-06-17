<?php

namespace INFT\prosgaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class RegistroPGAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('codigoPG')
            ->add('nombre')
            ->add('archivoFisico')
            ->add('archivoDigital')
            ->add('tiempoEnArchivo')
            ->add('observacion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('codigoPG')
            ->add('nombre')
            ->add('archivoFisico')
            ->add('archivoDigital')
            ->add('tiempoEnArchivo')
            ->add('observacion')
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
            ->add('codigoPG')
            ->add('nombre')
            ->add('archivoFisico', 'text', array('required' => false))
            ->add('archivoDigital', 'text', array('required' => false))
            ->add('tiempoEnArchivo')
            ->add('observacion', 'textarea', array('required' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('codigoPG')
            ->add('nombre')
            ->add('archivoFisico')
            ->add('archivoDigital')
            ->add('tiempoEnArchivo')
            ->add('observacion')
        ;
    }
}
