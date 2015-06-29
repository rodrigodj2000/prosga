<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProcesoController extends Controller
{
	public function mailAction(){
   	 $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('req@inft.com.ar')
        ->setTo('rodrigodj2000@gmail.com')
        ->setBody('Create una Cuenta de un Profesionaaaaal!!!!! jajaj')
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $this->get('mailer')->send($message);

    return $this->render('views/Actividad/index.html.twig');
	}

}
