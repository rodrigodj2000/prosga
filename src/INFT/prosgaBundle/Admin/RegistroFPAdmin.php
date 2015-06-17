<?php

namespace INFT\prosgaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class RegistroFPAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('codigoDeFicha')
            ->add('nombre')
            ->add('ubicacionArchivoFisico')
            ->add('ubicacionArchivoDigital')
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
            ->add('codigoDeFicha')
            ->add('nombre')
            ->add('ubicacionArchivoFisico')
            ->add('ubicacionArchivoDigital')
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
            ->add('fichaDeProceso', 'entity', array('class' => 'prosgaBundle:FichaDeProceso'))
            ->add('personaResponsable', 'entity', array('class' => 'prosgaBundle:Persona', 'label' => 'Responsable'))
            ->add('codigoDeFicha')
            ->add('nombre')
            ->add('ubicacionArchivoFisico', 'text', array('required' => false))
            ->add('ubicacionArchivoDigital', 'text', array('required' => false))
            ->add('tiempoEnArchivo', 'date', array('data' => new \DateTime('now')))
            ->add('observacion', 'textarea', array('label' => 'Observaciones',
                                                   'required' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('codigoDeFicha')
            ->add('nombre')
            ->add('ubicacionArchivoFisico')
            ->add('ubicacionArchivoDigital')
            ->add('tiempoEnArchivo')
            ->add('observacion')
        ;
    }
}
