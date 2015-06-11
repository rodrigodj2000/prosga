<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use INFT\prosgaBundle\Entity\Auditoria;
use INFT\prosgaBundle\Form\AuditoriaType;

/**
 * Auditoria controller.
 *
 * @Route("/auditoria")
 */
class AuditoriaController extends Controller
{

    /**
     * Lists all Auditoria entities.
     *
     * @Route("/", name="auditoria")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('prosgaBundle:Auditoria')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Auditoria entity.
     *
     * @Route("/", name="auditoria_create")
     * @Method("POST")
     * @Template("prosgaBundle:Auditoria:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Auditoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('auditoria_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Auditoria entity.
     *
     * @param Auditoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Auditoria $entity)
    {
        $form = $this->createForm(new AuditoriaType(), $entity, array(
            'action' => $this->generateUrl('auditoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Auditoria entity.
     *
     * @Route("/new", name="auditoria_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Auditoria();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Auditoria entity.
     *
     * @Route("/{id}", name="auditoria_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Auditoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Auditoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Auditoria entity.
     *
     * @Route("/{id}/edit", name="auditoria_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Auditoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Auditoria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Auditoria entity.
    *
    * @param Auditoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Auditoria $entity)
    {
        $form = $this->createForm(new AuditoriaType(), $entity, array(
            'action' => $this->generateUrl('auditoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Auditoria entity.
     *
     * @Route("/{id}", name="auditoria_update")
     * @Method("PUT")
     * @Template("prosgaBundle:Auditoria:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Auditoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Auditoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('auditoria_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Auditoria entity.
     *
     * @Route("/{id}", name="auditoria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:Auditoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Auditoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('auditoria'));
    }

    /**
     * Creates a form to delete a Auditoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('auditoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
