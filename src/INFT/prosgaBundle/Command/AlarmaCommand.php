<?php


namespace INFT\prosgaBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class AlarmaCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('prosga:notificar')
            ->setDescription('Notifica por correo electrónico que un proceso debe ejecutarse ')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();

        $tiposIncidencias = $em->getRepository('prosgaBundle:TiposIncidencias')->findAll();

        $texto_mail = "";
        foreach ($tiposIncidencias as $tipoIncidencia) {
        	$frecuencia = $tipoIncidencia->getFrecuencia();

        	$valorHoras = $frecuencia->getValorHoras();

        	$fecha = $tipoIncidencia->getFechaCreacion();


        	$fechaNotificar = $fecha->modify('+' .$valorHoras.' hour');

			$fechaNotificar = $fechaNotificar->format('d-m-Y');

			$fechaActual = new \DateTime('now');
			$fechaActual = $fechaActual->format('d/m/Y');

			if($fechaNotificar == $fechaActual){
				$texto_mail .= 'Debe realizar el Indicador: '. $tipoIncidencia->getNombre() .' Cuya Frecuencia es '. $frecuencia->getNombre();

                $destinatario = $tipoIncidencia->getPersonaResponsable()->getMail();
				$mensaje = \Swift_Message::newInstance()
				->setSubject('RECORDATORIO DEL INDICADOR: '. $tipoIncidencia->getNombre())
		        ->setFrom("req@inft.com.ar")
		        ->setTo($destinatario)
		        ->setBody($texto_mail);
	        
	        	$this->getContainer()->get('mailer')->send($mensaje);
			}
            
        }               
    }
	
}