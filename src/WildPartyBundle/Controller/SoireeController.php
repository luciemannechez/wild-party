<?php

namespace WildPartyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WildPartyBundle\Entity\Soiree;
use WildPartyBundle\Form\SoireeType;

/**
 * Soiree controller.
 *
 */
class SoireeController extends Controller
{

    /**
     * Lists all Soiree entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WildPartyBundle:Soiree')->findAll();

        return $this->render('WildPartyBundle:Soiree:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Soiree entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Soiree();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $user = $this->getUser();

            $entity->setUser($user);



            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('wild_party_homepage'));
        }

        return $this->render('WildPartyBundle:Soiree:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Soiree entity.
     *
     * @param Soiree $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Soiree $entity)
    {
        $form = $this->createForm(new SoireeType(), $entity, array(
            'action' => $this->generateUrl('soiree_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new Soiree entity.
     *
     */
    public function newAction()
    {
        $entity = new Soiree();
        $form   = $this->createCreateForm($entity);

        return $this->render('WildPartyBundle:Soiree:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Soiree entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WildPartyBundle:Soiree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Soiree entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WildPartyBundle:Soiree:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Soiree entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WildPartyBundle:Soiree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Soiree entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WildPartyBundle:Soiree:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Soiree entity.
    *
    * @param Soiree $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Soiree $entity)
    {
        $form = $this->createForm(new SoireeType(), $entity, array(
            'action' => $this->generateUrl('soiree_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Soiree entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WildPartyBundle:Soiree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Soiree entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('soiree_edit', array('id' => $id)));
        }

        return $this->render('WildPartyBundle:Soiree:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Soiree entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WildPartyBundle:Soiree')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Soiree entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('soiree'));
    }

    /**
     * Creates a form to delete a Soiree entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('soiree_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
