<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaDeProcesoEntrada
 */
class FichaDeProcesoEntrada
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $valoresDeEntrada;

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
     * Set valoresDeEntrada
     *
     * @param string $valoresDeEntrada
     * @return FichaDeProcesoEntrada
     */
    public function setValoresDeEntrada($valoresDeEntrada)
    {
        $this->valoresDeEntrada = $valoresDeEntrada;
    
        return $this;
    }

    /**
     * Get valoresDeEntrada
     *
     * @return string 
     */
    public function getValoresDeEntrada()
    {
        return $this->valoresDeEntrada;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return FichaDeProcesoEntrada
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
     * @return FichaDeProcesoEntrada
     */
    public function setFichaDeProceso($fichaDeProceso)
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
}
