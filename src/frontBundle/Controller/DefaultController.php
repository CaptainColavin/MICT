<?php

namespace frontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('frontBundle:Default:index.html.twig');
    }

    /**
     * @Route("/offres")
     */
    public function offre()
    {
        return $this->render('frontBundle:Default:offres.html.twig');
    }

    /**
     * @Route("/photos")
     */
    public function photos()
    {
        return $this->render('frontBundle:Default:photos.html.twig');
    }

    // /**
    //  * @Route("/livredor")
    //  */
    // public function book()
    // {   
    //     return $this->render('frontBundle:Default:goldenbook.html.twig');
    // }

    /**
     * @Route("/contact")
     */
    public function contact()
    {
        return $this->render('frontBundle:Default:contact.html.twig');
    }

    /**
     * @Route("/boutique")
     */
    public function shop()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BackBundle:Article')->findBy(
            array(),
            array('id' =>'desc'),
            5,
            0);
        return $this->render('frontBundle:Default:boutique.html.twig', array(
            'articles' => $articles,
        ));
        
    }
}
