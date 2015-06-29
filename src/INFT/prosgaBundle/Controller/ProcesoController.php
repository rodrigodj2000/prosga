<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProcesoController extends Controller
{
	public function mailAction(){
   	 $message = \Swift_Message::newInstance()
        ->setSubject('Alarma :: ProSGA')
        ->setFrom('req@inft.com.ar')
        ->setTo('rodrigodj2000@gmail.com')
        //->setBody('Create una Cuenta de un Profesionaaaaal!!!!! jajaj')        
        ->addPart(
            $this->renderView(
                'prosgaBundle::Emails/alarma.html.twig'
            ),
            'text/html'
        )
    ;
    $this->get('mailer')->send($message);

    return $this->render('views/Actividad/index.html.twig');
	}

}
