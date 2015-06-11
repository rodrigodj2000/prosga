<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auditoria
 */
class Auditoria
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
     * @var \DateTime
     */
    private $fechaDeAuditoria;

    /**
     * @var string
     */
    private $costoAuditoria;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var Persona
     */
    private $personaResponsable;

    /**
     * @var Sector
     */
    private $sector;

    /**
     * @var Estado
     */
    private $estado;


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
     * @return Auditoria
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
     * Set fechaDeAuditoria
     *
     * @param \DateTime $fechaDeAuditoria
     * @return Auditoria
     */
    public function setFechaDeAuditoria($fechaDeAuditoria)
    {
        $this->fechaDeAuditoria = $fechaDeAuditoria;
    
        return $this;
    }

    /**
     * Get fechaDeAuditoria
     *
     * @return \DateTime 
     */
    public function getFechaDeAuditoria()
    {
        return $this->fechaDeAuditoria;
    }

    /**
     * Set costoAuditoria
     *
     * @param string $costoAuditoria
     * @return Auditoria
     */
    public function setCostoAuditoria($costoAuditoria)
    {
        $this->costoAuditoria = $costoAuditoria;
    
        return $this;
    }

    /**
     * Get costoAuditoria
     *
     * @return string 
     */
    public function getCostoAuditoria()
    {
        return $this->costoAuditoria;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Auditoria
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
     * Set Persona
     *
     * @param Persona $personaResponsable
     * @return Auditoria
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
     * Set Sector
     *
     * @param Sector $sector
     * @return Auditoria
     */
    public function setSector(Sector $sector)
    {
        $this->sector = $sector;
    
        return $this;
    }

    /**
     * Get Sector
     *
     * @return Sector 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set Estado
     *
     * @param Estado $iestado
     * @return Auditoria
     */
    public function setEstado(Estado $estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get Estado
     *
     * @return Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    public function __toString(){
        return $this->nombre;
    }
}
