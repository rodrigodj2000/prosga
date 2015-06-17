<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargo
 */
class Cargo
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
     * @var integer
     */
    private $nivelEnOrganigrama;

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
     * @return Cargo
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
     * @return Cargo
     */
    public function setDescripcion($descripcion='')
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
     * Set nivelEnOrganigrama
     *
     * @param integer $nivelEnOrganigrama
     * @return Cargo
     */
    public function setNivelEnOrganigrama($nivelEnOrganigrama)
    {
        $this->nivelEnOrganigrama = $nivelEnOrganigrama;
    
        return $this;
    }

    /**
     * Get nivelEnOrganigrama
     *
     * @return integer 
     */
    public function getNivelEnOrganigrama()
    {
        return $this->nivelEnOrganigrama;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Cargo
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

    public function __toString(){
        return $this->nombre;
    }
}
