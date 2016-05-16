<?php

namespace CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('CMSBundle:Page')->findAll();
        return $this->render('CMSBundle:Default:index.html.twig', array('pages'=>$pages));
    }

    public function displayAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('CMSBundle:Page')->find($id);
        return $this->render('CMSBundle:Default:display.html.twig', array('page'=>$page));
    }
}
