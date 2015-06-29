<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencias
 */
class Incidencias
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
     * @var string
     */
    private $detalle;

    /**
     * @var integer
     */
    private $valor;

    /**
     * @var TiposIncidencias
     */
    private $tipoIncidencia;


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
     * @return Incidencias
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
     * Set detalle
     *
     * @param string $detalle
     * @return Incidencias
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
    
        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return Incidencias
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set TiposIncidencias
     *
     * @param integer $tipoIncidencia
     * @return TiposIncidencias
     */
    public function setTipoIncidencia(TiposIncidencias $tipoIncidencia)
    {
        $this->tipoIncidencia = $tipoIncidencia;
    
        return $this;
    }

    /**
     * Get tipoIncidencia
     *
     * @return integer 
     */
    public function getTipoIncidencia()
    {
        return $this->tipoIncidencia;
    }
}
