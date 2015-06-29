<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposIncidencias
 */
class TiposIncidencias
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
     * @var float
     */
    private $valorPermitido;

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
     * Set nombre
     *
     * @param string $nombre
     * @return TiposIncidencias
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
     * Set valorPermitido
     *
     * @param float $valorPermitido
     * @return TiposIncidencias
     */
    public function setValorPermitido($valorPermitido)
    {
        $this->valorPermitido = $valorPermitido;
    
        return $this;
    }

    /**
     * Get valorPermitido
     *
     * @return float 
     */
    public function getValorPermitido()
    {
        return $this->valorPermitido;
    }

    /**
     * Set FichaDeProceso
     *
     * @param FichaDeProceso $fichaDeProceso
     * @return FichaDeProcesoEntrada
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

    public function __toString(){
        return $this->nombre;
    }
}
