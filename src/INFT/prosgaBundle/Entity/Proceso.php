<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proceso
 */
class Proceso
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
     * @var Norma
     */
    private $norma;

    /**
     * @var Alarma
     */
    private $alarma;

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
     * @return Proceso
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
     * Set Norma
     *
     * @param Norma $norma
     * @return Proceso
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
     * Set Alarma
     *
     * @param Alarma $alarma
     * @return Proceso
     */
    public function setAlarma(Alarma $alarma)
    {
        $this->alarma = $alarma;
    
        return $this;
    }

    /**
     * Get Alarma
     *
     * @return Alarma 
     */
    public function getAlarma()
    {
        return $this->alarma;
    }

    /**
     * Set Estado
     *
     * @param Estado $estado
     * @return Proceso
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
}
