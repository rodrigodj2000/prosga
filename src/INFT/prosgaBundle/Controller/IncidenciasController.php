<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INFT\prosgaBundle\Entity\Incidencias;
use INFT\prosgaBundle\Form\IncidenciasType;

/**
 * Incidencias controller.
 *
 */
class IncidenciasController extends Controller
{

    /**
     * Lists all Incidencias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:Incidencias')->findAll();

        return $this->render('prosgaBundle:Incidencias:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Incidencias entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Incidencias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('incidencias_show', array('id' => $entity->getId())));
        }

        return $this->render('prosgaBundle:Incidencias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Incidencias entity.
     *
     * @param Incidencias $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Incidencias $entity)
    {
        $form = $this->createForm(new IncidenciasType(), $entity, array(
            'action' => $this->generateUrl('incidencias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Guardar',
            'attr' => array('class' => 'btn btn-primary espacio10')
            ));

        return $form;
    }

    /**
     * Displays a form to create a new Incidencias entity.
     *
     */
    public function newAction()
    {
        $entity = new Incidencias();
        $form   = $this->createCreateForm($entity);

        return $this->render('prosgaBundle:Incidencias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Incidencias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Incidencias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Incidencias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:Incidencias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Incidencias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Incidencias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Incidencias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:Incidencias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Incidencias entity.
    *
    * @param Incidencias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Incidencias $entity)
    {
        $form = $this->createForm(new IncidenciasType(), $entity, array(
            'action' => $this->generateUrl('incidencias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Actualizar',
            'attr' => array('class' => 'btn btn-primary espacio10')
            ));

        return $form;
    }
    /**
     * Edits an existing Incidencias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Incidencias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Incidencias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('incidencias_edit', array('id' => $id)));
        }

        return $this->render('prosgaBundle:Incidencias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Incidencias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:Incidencias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Incidencias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('incidencias'));
    }

    /**
     * Creates a form to delete a Incidencias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('incidencias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Eliminar',
                'attr' => array('class' => 'btn btn-danger espacio10')
                ))
            ->getForm()
        ;
    }
}
