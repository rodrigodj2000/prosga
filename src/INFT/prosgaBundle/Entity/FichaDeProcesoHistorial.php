<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaDeProcesoHistorial
 */
class FichaDeProcesoHistorial
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var Persona
     */
    private $persona;

    /**
     * @var integer
     */
    private $nroRevision;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var FichaDeProceso
     */
    private $fichaDeProceso;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return FichaDeProcesoHistorial
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
     * Set Persona
     *
     * @param Persona $persona
     * @return FichaDeProcesoHistorial
     */
    public function setPersona(Persona $persona)
    {
        $this->persona = $persona;
    
        return $this;
    }

    /**
     * Get Persona
     *
     * @return Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set nroRevision
     *
     * @param integer $nroRevision
     * @return FichaDeProcesoHistorial
     */
    public function setNroRevision($nroRevision)
    {
        $this->nroRevision = $nroRevision;
    
        return $this;
    }

    /**
     * Get nroRevision
     *
     * @return integer 
     */
    public function getNroRevision()
    {
        return $this->nroRevision;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return FichaDeProcesoHistorial
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
     * Set FichaDeProceso
     *
     * @param FichaDeProceso $fichaDeProceso
     * @return FichaDeProcesoHistorial
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
}
