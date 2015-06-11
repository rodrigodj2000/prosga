<?php

namespace RGV\EasyagroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RGVEasyagroBundle:Default:index.html.twig');
    }
}
