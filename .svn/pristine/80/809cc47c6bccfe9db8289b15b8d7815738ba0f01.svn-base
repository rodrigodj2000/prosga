<?php

namespace RGV\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RGVSiteBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function helpAction()
    {
        return new \Symfony\Component\HttpFoundation\Response('Ayuda');
    }
}
