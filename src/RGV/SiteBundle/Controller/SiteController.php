<?php

namespace RGV\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{   
    public function staticAction($page)
    {
        return $this->render('RGVSiteBundle:Static:'.$page.'.html.twig');
    }    
}