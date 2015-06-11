<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentoHistorial
 */
class DocumentoHistorial
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var Persona
     */
    private $persona;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var Documento
     */
    private $documento;


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
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return DocumentoHistorial
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;
    
        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set Persona
     *
     * @param Persona $persona
     * @return DocumentoHistorial
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
     * Set observacion
     *
     * @param string $observacion
     * @return DocumentoHistorial
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
     * Set Documento
     *
     * @param Documento $documento
     * @return DocumentoHistorial
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
}
