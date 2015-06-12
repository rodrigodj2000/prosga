<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use INFT\prosgaBundle\Entity\FichaDeProceso;
use INFT\prosgaBundle\Form\FichaDeProcesoType;

/**
 * FichaDeProceso controller.
 *
 */
class FichaDeProcesoController extends Controller
{

    /**
     * Lists all FichaDeProceso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:FichaDeProceso')->findAll();

        return $this->render('prosgaBundle:FichaDeProceso:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FichaDeProceso entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FichaDeProceso();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeproceso_show', array('id' => $entity->getId())));
        }

        return $this->render('prosgaBundle:FichaDeProceso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FichaDeProceso entity.
     *
     * @param FichaDeProceso $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FichaDeProceso $entity)
    {
        $form = $this->createForm(new FichaDeProcesoType(), $entity, array(
            'action' => $this->generateUrl('fichadeproceso_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FichaDeProceso entity.
     *
     */
    public function newAction()
    {
        $entity = new FichaDeProceso();
        $form   = $this->createCreateForm($entity);

        return $this->render('prosgaBundle:FichaDeProceso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FichaDeProceso entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProceso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProceso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:FichaDeProceso:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FichaDeProceso entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProceso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProceso entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('prosgaBundle:FichaDeProceso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FichaDeProceso entity.
    *
    * @param FichaDeProceso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FichaDeProceso $entity)
    {
        $form = $this->createForm(new FichaDeProcesoType(), $entity, array(
            'action' => $this->generateUrl('fichadeproceso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FichaDeProceso entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:FichaDeProceso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichaDeProceso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fichadeproceso_edit', array('id' => $id)));
        }

        return $this->render('prosgaBundle:FichaDeProceso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FichaDeProceso entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:FichaDeProceso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FichaDeProceso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichadeproceso'));
    }

    /**
     * Creates a form to delete a FichaDeProceso entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichadeproceso_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
