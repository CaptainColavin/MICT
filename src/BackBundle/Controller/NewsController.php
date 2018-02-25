<?php namespace BackBundle\Controller;

use BackBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Lists all News entities.
 *
 * @Route("/", name="livreor_index")
 * @Method("GET")
 */
public function indexAction()
{
    $em = $this->getDoctrine()->getManager();

    $news = $em->getRepository('BackBundle:News')->findAll();

    return $this->render('livreor/index.html.twig', array(
        'livreOrs' => $livreOrs,
    ));
}
