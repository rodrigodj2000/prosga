<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INFT\prosgaBundle\Entity\TiposIncidencias;
use INFT\prosgaBundle\Form\TiposIncidenciasType;

use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * TiposIncidencias controller.
 *
 */
class TiposIncidenciasController extends Controller
{

    /**
     * Lists all TiposIncidencias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:TiposIncidencias')->findAll();

        return $this->render('prosgaBundle:TiposIncidencias:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TiposIncidencias entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TiposIncidencias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiposincidencias_show', array('id' => $entity->getId())));
        }

        return $this->render('prosgaBundle:TiposIncidencias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TiposIncidencias entity.
     *
     * @param TiposIncidencias $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TiposIncidencias $entity)
    {
        $form = $this->createForm(new TiposIncidenciasType(), $entity, array(
            'action' => $this->generateUrl('tiposincidencias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Guardar',
            'attr' => array('class' => 'btn btn-primary espacio10')
            ));

        return $form;
    }

    /**
     * Displays a form to create a new TiposIncidencias entity.
     *
     */
    public function newAction()
    {
        $entity = new TiposIncidencias();
        $form   = $this->createCreateForm($entity);

        return $this->render('prosgaBundle:TiposIncidencias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TiposIncidencias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:TiposIncidencias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TiposIncidencias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:TiposIncidencias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TiposIncidencias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:TiposIncidencias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TiposIncidencias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:TiposIncidencias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TiposIncidencias entity.
    *
    * @param TiposIncidencias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TiposIncidencias $entity)
    {
        $form = $this->createForm(new TiposIncidenciasType(), $entity, array(
            'action' => $this->generateUrl('tiposincidencias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Actualizar',
            'attr' => array('class' => 'btn btn-primary espacio10')            
            ));

        return $form;
    }
    /**
     * Edits an existing TiposIncidencias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:TiposIncidencias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TiposIncidencias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiposincidencias_edit', array('id' => $id)));
        }

        return $this->render('prosgaBundle:TiposIncidencias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TiposIncidencias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:TiposIncidencias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TiposIncidencias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiposincidencias'));
    }

    /**
     * Creates a form to delete a TiposIncidencias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiposincidencias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Eliminar',
                'attr' => array('class' => 'btn btn-danger espacio10')
                ))
            ->getForm()
        ;
    }
    
    /**
     * Gráfico de Incidencias.
     *
     */
    public function graphAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:TiposIncidencias')->find($id);
        
        $incidencias = $em->getRepository('prosgaBundle:Incidencias')->findByTipoIncidencia($id);

        $valores = array();
        
        foreach($incidencias as $i)
        {
            $valores[] = $i->getValor();
        }
        
        // Chart
        $series = array(
            array("name" => "Valor Incidencias", "data" => $valores)
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Gráfico de Incidencias');
        $ob->subtitle->text($entity->getNombre());
        $ob->xAxis->title(array('text'  => "Mediciones"))
                ->tickInterval(1);
        $ob->yAxis->title(array('text'  => "Valores"))
                ->plotLines(array('value' => 2),
                            array('width' => 2)); //$entity->getValorPermitido()
        $ob->plotOptions->line(array('dataLabels' => (array('enabled' => 'true'))));
        $ob->series($series);        
        
        return $this->render('prosgaBundle:TiposIncidencias:graph.html.twig', array(
            'entity'  => $entity,
            'chart'   => $ob
        ));
    }    
    
}
