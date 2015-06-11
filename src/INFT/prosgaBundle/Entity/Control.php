<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Control
 */
class Control
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
     * @var string
     */
    private $descripcion;

    /**
     * @var Frecuencia
     */
    private $frecuencia;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var Persona
     */
    private $personaResponsable;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var FichaDeProceso
     */
    private $fichaDeProceso;

    /**
     * @var Sector[]
     */
    private $sectores;


    public function __construct(){
        $this->sectores = new ArrayCollection();
    }

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
     * @return Control
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Control
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set Frecuencia
     *
     * @param Frecuencia $frecuencia
     * @return Control
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Control
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set PersonaResponsable
     *
     * @param Persona $personaResponsable
     * @return Control
     */
    public function setPersonaResponsable(Persona $personaResponsable)
    {
        $this->personaResponsable = $personaResponsable;
    
        return $this;
    }

    /**
     * Get PersonaResponsable
     *
     * @return Persona 
     */
    public function getPersonaResponsable()
    {
        return $this->personaResponsable;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Control
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

    /**
     * Set FichaDeProceso
     *
     * @param FichaDeProceso $fichaDeProceso
     * @return Control
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

    public function addSector(Sector $sector){
        $this->sectores[] = $sector;
    }

    public function removeSector(Sector $sector){
        $this->sectores->removeElement($sector);
    }

    public function getSectores(){
        return $this->sectores;
    }
}
