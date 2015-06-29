<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

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
    
    public function graficoAction()
    {
        
        // Chart
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);

        return $this->render('prosgaBundle:Default:grafico.html.twig', array(
            'chart' => $ob
        ));        
    }         
    
}
