<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acciones
 */
class Acciones
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
    private $planAccion;

    /**
     * @var boolean
     */
    private $efectiva;

    /**
     * @var string
     */
    private $resultado;

    /**
     * @var string
     */
    private $analisisCausa;

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
     * @return Acciones
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
     * Set planAccion
     *
     * @param string $planAccion
     * @return Acciones
     */
    public function setPlanAccion($planAccion)
    {
        $this->planAccion = $planAccion;
    
        return $this;
    }

    /**
     * Get planAccion
     *
     * @return string 
     */
    public function getPlanAccion()
    {
        return $this->planAccion;
    }

    /**
     * Set efectiva
     *
     * @param boolean $efectiva
     * @return Acciones
     */
    public function setEfectiva($efectiva)
    {
        $this->efectiva = $efectiva;
    
        return $this;
    }

    /**
     * Get efectiva
     *
     * @return boolean 
     */
    public function getEfectiva()
    {
        return $this->efectiva;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return Acciones
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    
        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set analisisCausa
     *
     * @param string $analisisCausa
     * @return Acciones
     */
    public function setAnalisisCausa($analisisCausa)
    {
        $this->analisisCausa = $analisisCausa;
    
        return $this;
    }

    /**
     * Get analisisCausa
     *
     * @return string 
     */
    public function getAnalisisCausa()
    {
        return $this->analisisCausa;
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
