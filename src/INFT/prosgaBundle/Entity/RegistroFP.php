<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroFP
 */
class RegistroFP
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoDeFicha;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $ubicacionArchivoFisico;

    /**
     * @var string
     */
    private $ubicacionArchivoDigital;

    /**
     * @var \DateTime
     */
    private $tiempoEnArchivo;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var FichaDeProceso
     */
    private $fichaDeProceso;

    /**
     * @var Persona
     */
    private $personaResponsable;


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
     * Set codigoDeFicha
     *
     * @param string $codigoDeFicha
     * @return RegistroFP
     */
    public function setCodigoDeFicha($codigoDeFicha)
    {
        $this->codigoDeFicha = $codigoDeFicha;
    
        return $this;
    }

    /**
     * Get codigoDeFicha
     *
     * @return string 
     */
    public function getCodigoDeFicha()
    {
        return $this->codigoDeFicha;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RegistroFP
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
     * Set ubicacionArchivoFisico
     *
     * @param string $ubicacionArchivoFisico
     * @return RegistroFP
     */
    public function setUbicacionArchivoFisico($ubicacionArchivoFisico='')
    {
        $this->ubicacionArchivoFisico = $ubicacionArchivoFisico;
    
        return $this;
    }

    /**
     * Get ubicacionArchivoFisico
     *
     * @return string 
     */
    public function getUbicacionArchivoFisico()
    {
        return $this->ubicacionArchivoFisico;
    }

    /**
     * Set ubicacionArchivoDigital
     *
     * @param string $ubicacionArchivoDigital
     * @return RegistroFP
     */
    public function setUbicacionArchivoDigital($ubicacionArchivoDigital='')
    {
        $this->ubicacionArchivoDigital = $ubicacionArchivoDigital;
    
        return $this;
    }

    /**
     * Get ubicacionArchivoDigital
     *
     * @return string 
     */
    public function getUbicacionArchivoDigital()
    {
        return $this->ubicacionArchivoDigital;
    }

    /**
     * Set tiempoEnArchivo
     *
     * @param \DateTime $tiempoEnArchivo
     * @return RegistroFP
     */
    public function setTiempoEnArchivo($tiempoEnArchivo)
    {
        $this->tiempoEnArchivo = $tiempoEnArchivo;
    
        return $this;
    }

    /**
     * Get tiempoEnArchivo
     *
     * @return \DateTime 
     */
    public function getTiempoEnArchivo()
    {
        return $this->tiempoEnArchivo;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return RegistroFP
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

    /**
     * Set FichaDeProceso
     *
     * @param FichaDeProceso $fichaDeProceso
     * @return RegistroFP
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

    /**
     * Set personaResponsable
     *
     * @param string $personaResponsable
     * @return RegistroFP
     */
    public function setPersonaResponsable(Persona $personaResponsable)
    {
        $this->personaResponsable = $personaResponsable;
    
        return $this;
    }

    /**
     * Get personaResponsable
     *
     * @return Persona 
     */
    public function getPersonaResponsable()
    {
        return $this->personaResponsable;
    }
}

