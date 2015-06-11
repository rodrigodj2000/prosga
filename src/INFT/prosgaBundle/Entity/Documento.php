<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 */
class Documento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var string
     */
    private $ubicacion;

    /**
     * @var Auditoria
     */
    private $auditoria;

    /**
     * @var Proceso
     */
    private $proceso;

    /**
     * @var Estado
     */
    private $estado;

    /**
     * @var Persona
     */
    private $persona;


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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Documento
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    
        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Documento
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set Auditoria
     *
     * @param Auditoria $auditoria
     * @return Documento
     */
    public function setAuditoria($auditoria)
    {
        $this->auditoria = $auditoria;
    
        return $this;
    }

    /**
     * Get Auditoria
     *
     * @return Auditoria 
     */
    public function getAuditoria()
    {
        return $this->auditoria;
    }

    /**
     * Set Proceso
     *
     * @param Proceso $proceso
     * @return Documento
     */
    public function setProceso($proceso)
    {
        $this->proceso = $proceso;
    
        return $this;
    }

    /**
     * Get Proceso
     *
     * @return Proceso 
     */
    public function getProceso()
    {
        return $this->proceso;
    }

    /**
     * Set Estado
     *
     * @param Estado Estado
     * @return Documento
     */
    public function setEstado($estado)
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

    /**
     * Set Persona
     *
     * @param Persona $persona
     * @return Documento
     */
    public function setPersona($persona)
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
}
