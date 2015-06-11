<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('prosgaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function homeAction()
    {
        return $this->render('prosgaBundle:Default:index.html.twig');
    }                
    
    public function consultasAction()
    {
        return $this->render('prosgaBundle:Default:consultas.html.twig');
    } 
    
    public function acercadeAction()
    {
        return $this->render('prosgaBundle:Default:acercade.html.twig');
    }     
    
}
