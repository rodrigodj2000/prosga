<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivoAdjunto
 */
class ArchivoAdjunto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var Documento
     */
    private $documento;

    /**
     * @var Control
     */
    private $control;

    /**
     * @var Indicador
     */
    private $indicador;

    /**
     * @var FichaDeProceso
     */
    private $fichaDeProceso;

    /**
     * @var string
     */
    private $observacion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

     /**
     * Set nombre
     *
     * @param string $nombre
     * @return ArchivoAdjunto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set Documento
     *
     * @param Documento $documento
     * @return ArchivoAdjunto
     */
    public function setDocumento(Documento $documento)
    {
        $this->documento = $documento;
    
        return $this;
    }

    /**
     * Get Documento
     *
     * @return Documento 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set Control
     *
     * @param Control $control
     * @return ArchivoAdjunto
     */
    public function setControl(Control $control)
    {
        $this->control = $control;
    
        return $this;
    }

    /**
     * Get Control
     *
     * @return Control 
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Set Indicador
     *
     * @param Indicador $indicador
     * @return ArchivoAdjunto
     */
    public function setIndicador(Indicador $indicador)
    {
        $this->indicador = $indicador;
    
        return $this;
    }

    /**
     * Get Indicador
     *
     * @return Indicador 
     */
    public function getIndicador()
    {
        return $this->indicador;
    }

    /**
     * Set FichaDeProceso
     *
     * @param FichaDeProceso $fichaDeProceso
     * @return ArchivoAdjunto
     */
    public function setFichaDeProceso(FichaDeProceso $fichaDeProceso)
    {
        $this->fichaDeProceso = $fichaDeProceso;
    
        return $this;
    }

    /**
     * Get FichaDeProceso
     *
     * @return FichaDeProceso 
     */
    public function getFichaDeProceso()
    {
        return $this->fichaDeProceso;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return ArchivoAdjunto
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    public function __toString(){
        return $this->nombre;
    }
}
