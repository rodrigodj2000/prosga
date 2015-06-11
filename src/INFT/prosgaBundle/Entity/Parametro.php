<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametro
 */
class Parametro
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
    private $fuente;

    /**
     * @var string
     */
    private $tamanio;

    /**
     * @var string
     */
    private $color;

    /**
     * @var boolean
     */
    private $adjuntarArchivo;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var boolean
     */
    private $relacionarDocs;

    /**
     * @var Persona
     */
    private $persona;

    /**
     * @var string
     */
    private $ubicacionRepositorio;


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
     * @return Parametro
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
     * Set fuente
     *
     * @param string $fuente
     * @return Parametro
     */
    public function setFuente($fuente)
    {
        $this->fuente = $fuente;
    
        return $this;
    }

    /**
     * Get fuente
     *
     * @return string 
     */
    public function getFuente()
    {
        return $this->fuente;
    }

    /**
     * Set tamanio
     *
     * @param string $tamanio
     * @return Parametro
     */
    public function setTamanio($tamanio)
    {
        $this->tamanio = $tamanio;
    
        return $this;
    }

    /**
     * Get tamanio
     *
     * @return string 
     */
    public function getTamanio()
    {
        return $this->tamanio;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Parametro
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set adjuntarArchivo
     *
     * @param boolean $adjuntarArchivo
     * @return Parametro
     */
    public function setAdjuntarArchivo($adjuntarArchivo)
    {
        $this->adjuntarArchivo = $adjuntarArchivo;
    
        return $this;
    }

    /**
     * Get adjuntarArchivo
     *
     * @return boolean 
     */
    public function getAdjuntarArchivo()
    {
        return $this->adjuntarArchivo;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return Parametro
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    
        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set relacionarDocs
     *
     * @param boolean $relacionarDocs
     * @return Parametro
     */
    public function setRelacionarDocs($relacionarDocs)
    {
        $this->relacionarDocs = $relacionarDocs;
    
        return $this;
    }

    /**
     * Get relacionarDocs
     *
     * @return boolean 
     */
    public function getRelacionarDocs()
    {
        return $this->relacionarDocs;
    }

    /**
     * Set Persona
     *
     * @param Persona $persona
     * @return Parametro
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
     * Set ubicacionRepositorio
     *
     * @param string $ubicacionRepositorio
     * @return Parametro
     */
    public function setUbicacionRepositorio($ubicacionRepositorio)
    {
        $this->ubicacionRepositorio = $ubicacionRepositorio;
    
        return $this;
    }

    /**
     * Get ubicacionRepositorio
     *
     * @return string 
     */
    public function getUbicacionRepositorio()
    {
        return $this->ubicacionRepositorio;
    }

    public function __toString(){
        return $this->nombre;
    }
}
