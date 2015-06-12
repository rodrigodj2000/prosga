<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INFT\prosgaBundle\Entity\FichaDeProcesoHistorial;
use INFT\prosgaBundle\Form\FichaDeProcesoHistorialType;

/**
 * FichaDeProcesoHistorial controller.
 *
 */
class FichaDeProcesoHistorialController extends Controller
{

    /**
     * Lists all FichaDeProcesoHistorial entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:FichaDeProcesoHistorial')->findAll();

        return $this->render('prosgaBundle:FichaDeProcesoHistorial:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FichaDeProcesoHistorial entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FichaDeProcesoHistorial();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeprocesohistorial_show', array('id' => $entity->getId())));
        }

        return $this->render('prosgaBundle:FichaDeProcesoHistorial:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FichaDeProcesoHistorial entity.
     *
     * @param FichaDeProcesoHistorial $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FichaDeProcesoHistorial $entity)
    {
        $form = $this->createForm(new FichaDeProcesoHistorialType(), $entity, array(
            'action' => $this->generateUrl('fichadeprocesohistorial_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FichaDeProcesoHistorial entity.
     *
     */
    public function newAction()
    {
        $entity = new FichaDeProcesoHistorial();
        $form   = $this->createCreateForm($entity);

        return $this->render('prosgaBundle:FichaDeProcesoHistorial:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FichaDeProcesoHistorial entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoHistorial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoHistorial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:FichaDeProcesoHistorial:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FichaDeProcesoHistorial entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoHistorial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoHistorial entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:FichaDeProcesoHistorial:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FichaDeProcesoHistorial entity.
    *
    * @param FichaDeProcesoHistorial $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FichaDeProcesoHistorial $entity)
    {
        $form = $this->createForm(new FichaDeProcesoHistorialType(), $entity, array(
            'action' => $this->generateUrl('fichadeprocesohistorial_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FichaDeProcesoHistorial entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoHistorial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoHistorial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeprocesohistorial_edit', array('id' => $id)));
        }

        return $this->render('prosgaBundle:FichaDeProcesoHistorial:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FichaDeProcesoHistorial entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:FichaDeProcesoHistorial')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FichaDeProcesoHistorial entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichadeprocesohistorial'));
    }

    /**
     * Creates a form to delete a FichaDeProcesoHistorial entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichadeprocesohistorial_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
