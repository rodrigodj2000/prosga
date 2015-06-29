<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INFT\prosgaBundle\Entity\Acciones;
use INFT\prosgaBundle\Form\AccionesType;

/**
 * Acciones controller.
 *
 */
class AccionesController extends Controller
{

    /**
     * Lists all Acciones entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:Acciones')->findAll();

        return $this->render('prosgaBundle:Acciones:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Acciones entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Acciones();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('acciones_show', array('id' => $entity->getId())));
        }

        return $this->render('prosgaBundle:Acciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Acciones entity.
     *
     * @param Acciones $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Acciones $entity)
    {
        $form = $this->createForm(new AccionesType(), $entity, array(
            'action' => $this->generateUrl('acciones_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Guardar',
            'attr' => array('class' => 'btn btn-primary espacio10')
            ));

        return $form;
    }

    /**
     * Displays a form to create a new Acciones entity.
     *
     */
    public function newAction()
    {
        $entity = new Acciones();
        $form   = $this->createCreateForm($entity);

        return $this->render('prosgaBundle:Acciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Acciones entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Acciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:Acciones:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acciones entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Acciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acciones entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:Acciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Acciones entity.
    *
    * @param Acciones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Acciones $entity)
    {
        $form = $this->createForm(new AccionesType(), $entity, array(
            'action' => $this->generateUrl('acciones_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Actualizar',
            'attr' => array('class' => 'btn btn-primary espacio10')
            ));

        return $form;
    }
    /**
     * Edits an existing Acciones entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Acciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('acciones_edit', array('id' => $id)));
        }

        return $this->render('prosgaBundle:Acciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Acciones entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:Acciones')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Acciones entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('acciones'));
    }

    /**
     * Creates a form to delete a Acciones entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acciones_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Eliminar',
                'attr' => array('class' => 'btn btn-danger espacio10')
                ))
            ->getForm()
        ;
    }
}
