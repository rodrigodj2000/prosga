<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposIncidencias
 */
class TiposIncidencias
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
     * @var float
     */
    private $valorPermitido;

    /**
     * @var FichaDeProceso
     */
    private $fichaDeProceso;
    
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $observacion;
    
    /**
     * @var Frecuencia
     */
    private $frecuencia;

    /**
     * @var Persona
     */
    private $personaResponsable;    

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
     * @return TiposIncidencias
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
     * Set valorPermitido
     *
     * @param float $valorPermitido
     * @return TiposIncidencias
     */
    public function setValorPermitido($valorPermitido)
    {
        $this->valorPermitido = $valorPermitido;
    
        return $this;
    }

    /**
     * Get valorPermitido
     *
     * @return float 
     */
    public function getValorPermitido()
    {
        return $this->valorPermitido;
    }

    /**
     * Set FichaDeProceso
     *
     * @param FichaDeProceso $fichaDeProceso
     * @return FichaDeProcesoEntrada
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Indicador
     */
    public function setdescripcion($descripcion='')
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getdescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Indicador
     */
    public function setObservacion($observacion='')
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

    /**
     * Set Frecuencia
     *
     * @param Frecuencia $frecuencia
     * @return Indicador
     */
    public function setFrecuencia(Frecuencia $frecuencia)
    {
        $this->frecuencia = $frecuencia;
    
        return $this;
    }

    /**
     * Get Frecuencia
     *
     * @return Frecuencia 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }
    
    
     /**
     * Set personaResponsable
     *
     * @param string $personaResponsable
     * @return Indicador
     */
    public function setPersonaResponsable(Persona $personaResponsable)
    {
        $this->personaResponsable = $personaResponsable;
    
        return $this;
    }

    /**
     * Get personaResponsable
     *
     * @return Persona 
     */
    public function getPersonaResponsable()
    {
        return $this->personaResponsable;
    }    
    
    
    public function __toString(){
        return $this->nombre;
    }
}
