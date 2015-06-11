<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatrizLegal
 */
class MatrizLegal
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $emisor;

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
    private $vencimiento;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var Norma
     */
    private $norma;

    /**
     * @var string
     */
    private $autoridadAAplicar;

    /**
     * @var string
     */
    private $obligaciones;

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
     * Set emisor
     *
     * @param string $emisor
     * @return MatrizLegal
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;
    
        return $this;
    }

    /**
     * Get emisor
     *
     * @return string 
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return MatrizLegal
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
     * @return MatrizLegal
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
     * Set vencimiento
     *
     * @param \DateTime $vencimiento
     * @return MatrizLegal
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;
    
        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return \DateTime 
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return MatrizLegal
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
     * Set Norma
     *
     * @param Norma $norma
     * @return MatrizLegal
     */
    public function setNorma(Norma $norma)
    {
        $this->norma = $norma;
    
        return $this;
    }

    /**
     * Get Norma
     *
     * @return Norma 
     */
    public function getNorma()
    {
        return $this->norma;
    }

    /**
     * Set autoridadAAplicar
     *
     * @param string $autoridadAAplicar
     * @return MatrizLegal
     */
    public function setAutoridadAAplicar($autoridadAAplicar)
    {
        $this->autoridadAAplicar = $autoridadAAplicar;
    
        return $this;
    }

    /**
     * Get autoridadAAplicar
     *
     * @return string 
     */
    public function getAutoridadAAplicar()
    {
        return $this->autoridadAAplicar;
    }

    /**
     * Set obligaciones
     *
     * @param string $obligaciones
     * @return MatrizLegal
     */
    public function setObligaciones($obligaciones)
    {
        $this->obligaciones = $obligaciones;
    
        return $this;
    }

    /**
     * Get obligaciones
     *
     * @return string 
     */
    public function getObligaciones()
    {
        return $this->obligaciones;
    }

    /**
     * Set Persona
     *
     * @param Persona $persona
     * @return MatrizLegal
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
}
