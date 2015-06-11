<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroPG
 */
class RegistroPG
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoPG;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $archivoFisico;

    /**
     * @var string
     */
    private $archivoDigital;

    /**
     * @var \DateTime
     */
    private $tiempoEnArchivo;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var ProcedimientoGeneral
     */
    private $procedimientoGeneral;


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
     * Set codigoPG
     *
     * @param string $codigoPG
     * @return RegistroPG
     */
    public function setCodigoPG($codigoPG)
    {
        $this->codigoPG = $codigoPG;
    
        return $this;
    }

    /**
     * Get codigoPG
     *
     * @return string 
     */
    public function getCodigoPG()
    {
        return $this->codigoPG;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RegistroPG
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
     * Set archivoFisico
     *
     * @param string $archivoFisico
     * @return RegistroPG
     */
    public function setArchivoFisico($archivoFisico)
    {
        $this->archivoFisico = $archivoFisico;
    
        return $this;
    }

    /**
     * Get archivoFisico
     *
     * @return string 
     */
    public function getArchivoFisico()
    {
        return $this->archivoFisico;
    }

    /**
     * Set archivoDigital
     *
     * @param string $archivoDigital
     * @return RegistroPG
     */
    public function setArchivoDigital($archivoDigital)
    {
        $this->archivoDigital = $archivoDigital;
    
        return $this;
    }

    /**
     * Get archivoDigital
     *
     * @return string 
     */
    public function getArchivoDigital()
    {
        return $this->archivoDigital;
    }

    /**
     * Set tiempoEnArchivo
     *
     * @param \DateTime $tiempoEnArchivo
     * @return RegistroPG
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
     * @return RegistroPG
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
     * Set ProcedimientoGeneral
     *
     * @param ProcedimientoGeneral $procedimientoGeneral
     * @return RegistroPG
     */
    public function setProcedimientoGeneral($procedimientoGeneral)
    {
        $this->procedimientoGeneral = $procedimientoGeneral;
    
        return $this;
    }

    /**
     * Get ProcedimientoGeneral
     *
     * @return ProcedimientoGeneral 
     */
    public function getProcedimientoGeneral()
    {
        return $this->procedimientoGeneral;
    }
}
