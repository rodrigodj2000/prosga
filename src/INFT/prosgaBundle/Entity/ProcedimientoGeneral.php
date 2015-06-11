<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcedimientoGeneral
 */
class ProcedimientoGeneral
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoProcedimiento;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fechaDeEmision;

    /**
     * @var \DateTime
     */
    private $fechaDeRevision;

    /**
     * @var integer
     */
    private $nroRevision;

    /**
     * @var string
     */
    private $objetivos;

    /**
     * @var Persona
     */
    private $personaResponsable;

    /**
     * @var string
     */
    private $alcance;

    /**
     * @var ProcedimientoGeneral
     */
    private $procedGeneralAntecesor;

    /**
     * @var ProcedimientoGeneral
     */
    private $procedGeneralPredecesor;

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
     * Set codigoProcedimiento
     *
     * @param string $codigoProcedimiento
     * @return ProcedimientoGeneral
     */
    public function setCodigoProcedimiento($codigoProcedimiento)
    {
        $this->codigoProcedimiento = $codigoProcedimiento;
    
        return $this;
    }

    /**
     * Get codigoProcedimiento
     *
     * @return string 
     */
    public function getCodigoProcedimiento()
    {
        return $this->codigoProcedimiento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return ProcedimientoGeneral
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
     * Set fechaDeEmision
     *
     * @param \DateTime $fechaDeEmision
     * @return ProcedimientoGeneral
     */
    public function setFechaDeEmision($fechaDeEmision)
    {
        $this->fechaDeEmision = $fechaDeEmision;
    
        return $this;
    }

    /**
     * Get fechaDeEmision
     *
     * @return \DateTime 
     */
    public function getFechaDeEmision()
    {
        return $this->fechaDeEmision;
    }

    /**
     * Set fechaDeRevision
     *
     * @param \DateTime $fechaDeRevision
     * @return ProcedimientoGeneral
     */
    public function setFechaDeRevision($fechaDeRevision)
    {
        $this->fechaDeRevision = $fechaDeRevision;
    
        return $this;
    }

    /**
     * Get fechaDeRevision
     *
     * @return \DateTime 
     */
    public function getFechaDeRevision()
    {
        return $this->fechaDeRevision;
    }

    /**
     * Set nroRevision
     *
     * @param integer $nroRevision
     * @return ProcedimientoGeneral
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
     * Set objetivos
     *
     * @param string $objetivos
     * @return ProcedimientoGeneral
     */
    public function setObjetivos($objetivos)
    {
        $this->objetivos = $objetivos;
    
        return $this;
    }

    /**
     * Get objetivos
     *
     * @return string 
     */
    public function getObjetivos()
    {
        return $this->objetivos;
    }

    /**
     * Set PersonaResponsable
     *
     * @param Persona $personaResponsable
     * @return ProcedimientoGeneral
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
     * Set alcance
     *
     * @param string $alcance
     * @return ProcedimientoGeneral
     */
    public function setAlcance($alcance)
    {
        $this->alcance = $alcance;
    
        return $this;
    }

    /**
     * Get alcance
     *
     * @return string 
     */
    public function getAlcance()
    {
        return $this->alcance;
    }

    /**
     * Set ProcedGeneralAntecesor
     *
     * @param ProcedimientoGeneral $procedGeneralAntecesor
     * @return ProcedimientoGeneral
     */
    public function setProcedGeneralAntecesor(ProcedimientoGeneral $procedGeneralAntecesor)
    {
        $this->procedGeneralAntecesor = $procedGeneralAntecesor;
    
        return $this;
    }

    /**
     * Get ProcedGeneralAntecesor
     *
     * @return ProcedimientoGeneral 
     */
    public function getProcedGeneralAntecesor()
    {
        return $this->procedGeneralAntecesor;
    }

    /**
     * Set ProcedGeneralPredecesor
     *
     * @param ProcedimientoGeneral $procedGeneralPredecesor
     * @return ProcedimientoGeneral
     */
    public function setProcedGeneralPredecesor(ProcedimientoGeneral $procedGeneralPredecesor)
    {
        $this->procedGeneralPredecesor = $procedGeneralPredecesor;
    
        return $this;
    }

    /**
     * Get ProcedGeneralPredecesor
     *
     * @return ProcedimientoGeneral 
     */
    public function getProcedGeneralPredecesor()
    {
        return $this->procedGeneralPredecesor;
    }
	
    public function __toString(){
        return $this->nombre;
    }
	
}
