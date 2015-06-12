<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INFT\prosgaBundle\Entity\FichaDeProcesoSalida;
use INFT\prosgaBundle\Form\FichaDeProcesoSalidaType;

/**
 * FichaDeProcesoSalida controller.
 *
 */
class FichaDeProcesoSalidaController extends Controller
{

    /**
     * Lists all FichaDeProcesoSalida entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:FichaDeProcesoSalida')->findAll();

        return $this->render('prosgaBundle:FichaDeProcesoSalida:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FichaDeProcesoSalida entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FichaDeProcesoSalida();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeprocesosalida_show', array('id' => $entity->getId())));
        }

        return $this->render('prosgaBundle:FichaDeProcesoSalida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FichaDeProcesoSalida entity.
     *
     * @param FichaDeProcesoSalida $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FichaDeProcesoSalida $entity)
    {
        $form = $this->createForm(new FichaDeProcesoSalidaType(), $entity, array(
            'action' => $this->generateUrl('fichadeprocesosalida_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FichaDeProcesoSalida entity.
     *
     */
    public function newAction()
    {
        $entity = new FichaDeProcesoSalida();
        $form   = $this->createCreateForm($entity);

        return $this->render('prosgaBundle:FichaDeProcesoSalida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FichaDeProcesoSalida entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoSalida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoSalida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:FichaDeProcesoSalida:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FichaDeProcesoSalida entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoSalida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoSalida entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:FichaDeProcesoSalida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FichaDeProcesoSalida entity.
    *
    * @param FichaDeProcesoSalida $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FichaDeProcesoSalida $entity)
    {
        $form = $this->createForm(new FichaDeProcesoSalidaType(), $entity, array(
            'action' => $this->generateUrl('fichadeprocesosalida_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FichaDeProcesoSalida entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProcesoSalida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProcesoSalida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeprocesosalida_edit', array('id' => $id)));
        }

        return $this->render('prosgaBundle:FichaDeProcesoSalida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FichaDeProcesoSalida entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:FichaDeProcesoSalida')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FichaDeProcesoSalida entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichadeprocesosalida'));
    }

    /**
     * Creates a form to delete a FichaDeProcesoSalida entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichadeprocesosalida_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
