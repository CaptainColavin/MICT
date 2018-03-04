<?php

namespace BackBundle\Controller;

use BackBundle\Entity\LivreOr;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Livreor controller.
 *
 * @Route("livreor")
 */
class LivreOrController extends Controller
{
    /**
     * Lists all livreOr entities.
     *
     * @Route("/", name="livreor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $livreOrs = $em->getRepository('BackBundle:LivreOr')->findBy(
            array(),
            array('id' =>'desc'),
            5,
            0);

        return $this->render('livreor/index.html.twig', array(
            'livreOrs' => $livreOrs,
        ));
    }

    /**
     * Creates a new livreOr entity.
     *
     * @Route("/new", name="livreor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $livreOr = new Livreor();
        $form = $this->createForm('BackBundle\Form\LivreOrType', $livreOr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($livreOr);
            $em->flush();

            return $this->redirectToRoute('livreor_show', array('id' => $livreOr->getId()));
        }

        return $this->render('livreor/new.html.twig', array(
            'livreOr' => $livreOr,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a livreOr entity.
     *
     * @Route("/{id}", name="livreor_show")
     * @Method("GET")
     */
    public function showAction(LivreOr $livreOr)
    {
        $deleteForm = $this->createDeleteForm($livreOr);

        return $this->render('livreor/show.html.twig', array(
            'livreOr' => $livreOr,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing livreOr entity.
     *
     * @Route("/{id}/edit", name="livreor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, LivreOr $livreOr)
    {
        $deleteForm = $this->createDeleteForm($livreOr);
        $editForm = $this->createForm('BackBundle\Form\LivreOrType', $livreOr);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('livreor_edit', array('id' => $livreOr->getId()));
        }

        return $this->render('livreor/edit.html.twig', array(
            'livreOr' => $livreOr,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a livreOr entity.
     *
     * @Route("/{id}", name="livreor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, LivreOr $livreOr)
    {
        $form = $this->createDeleteForm($livreOr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($livreOr);
            $em->flush();
        }

        return $this->redirectToRoute('livreor_index');
    }

    /**
     * Creates a form to delete a livreOr entity.
     *
     * @param LivreOr $livreOr The livreOr entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(LivreOr $livreOr)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('livreor_delete', array('id' => $livreOr->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
