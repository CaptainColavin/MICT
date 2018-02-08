<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/gestion")
     */
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }


    /**
     * @Route("/gestion/offre")
     */
    public function offreAction()
    {
        return $this->render('BackBundle:Default:offre.html.twig');
    }

    /**
     * @Route("/gestion/photo")
     */
    public function photoAction()
    {
        return $this->render('BackBundle:Default:photo.html.twig');
    }

    /**
     * @Route("/gestion/livre")
     */
    public function livreAction()
    {
        return $this->render('BackBundle:Default:livre.html.twig');
    }

    /**
     * @Route("/gestion/contact")
     */
    public function contactAction()
    {
        return $this->render('BackBundle:Default:contact.html.twig');
    }

    /**
     * @Route("/gestion/boutique")
     */
    public function boutiqueAction()
    {
        return $this->render('BackBundle:Default:boutique.html.twig');
    }
}
