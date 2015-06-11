<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaDeProcesoSalida
 */
class FichaDeProcesoSalida
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $valoresDeSalida;

    /**
     * @var string
     */
    private $observacion;

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
     * Set valoresDeSalida
     *
     * @param string $valoresDeSalida
     * @return FichaDeProcesoSalida
     */
    public function setValoresDeSalida($valoresDeSalida)
    {
        $this->valoresDeSalida = $valoresDeSalida;
    
        return $this;
    }

    /**
     * Get valoresDeSalida
     *
     * @return string 
     */
    public function getValoresDeSalida()
    {
        return $this->valoresDeSalida;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return FichaDeProcesoSalida
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
     * Set FichaDeProceso
     *
     * @param FichaDeProceso $fichaDeProceso
     * @return FichaDeProcesoSalida
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
        return $this->valoresDeSalida;
    }
}
