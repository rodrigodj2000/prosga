<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INFT\prosgaBundle\Entity\FichaDeProcesoEntrada;
use INFT\prosgaBundle\Form\FichaDeProcesoEntradaType;

/**
 * FichaDeProcesoEntrada controller.
 *
 */
class FichaDeProcesoEntradaController extends Controller
{

    /**
     * Lists all FichaDeProcesoEntrada entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:FichaDeProcesoEntrada')->findAll();

        return $this->render('prosgaBundle:FichaDeProcesoEntrada:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FichaDeProcesoEntrada entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FichaDeProcesoEntrada();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeprocesoentrada_show', array('id' => $entity->getId())));
        }

        return $this->render('prosgaBundle:FichaDeProcesoEntrada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FichaDeProcesoEntrada entity.
     *
     * @param FichaDeProcesoEntrada $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FichaDeProcesoEntrada $entity)
    {
        $form = $this->createForm(new FichaDeProcesoEntradaType(), $entity, array(
            'action' => $this->generateUrl('fichadeprocesoentrada_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear Entrada',
                                             'attr' => array('class' => 'btn btn-primary espacio10')));

        return $form;
    }

    /**
     * Displays a form to create a new FichaDeProcesoEntrada entity.
     *
     */
    public function newAction()
    {
        $entity = new FichaDeProcesoEntrada();
        $form   = $this->createCreateForm($entity);

        return $this->render('prosgaBundle:FichaDeProcesoEntrada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FichaDeProcesoEntrada entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoEntrada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoEntrada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);        
        
        return $this->render('prosgaBundle:FichaDeProcesoEntrada:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FichaDeProcesoEntrada entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoEntrada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoEntrada entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:FichaDeProcesoEntrada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FichaDeProcesoEntrada entity.
    *
    * @param FichaDeProcesoEntrada $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FichaDeProcesoEntrada $entity)
    {
        $form = $this->createForm(new FichaDeProcesoEntradaType(), $entity, array(
            'action' => $this->generateUrl('fichadeprocesoentrada_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar Datos',
                                             'attr' => array('class' => 'btn btn-primary espacio10')));

        return $form;
    }
    /**
     * Edits an existing FichaDeProcesoEntrada entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoEntrada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoEntrada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeprocesoentrada_edit', array('id' => $id)));
        }

        return $this->render('prosgaBundle:FichaDeProcesoEntrada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FichaDeProcesoEntrada entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:FichaDeProcesoEntrada')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FichaDeProcesoEntrada entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichadeprocesoentrada'));
    }

    /**
     * Creates a form to delete a FichaDeProcesoEntrada entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichadeprocesoentrada_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar',
                                            'attr' => array('class' => 'btn btn-danger espacio10')))
            ->getForm()
        ;
    }
}
