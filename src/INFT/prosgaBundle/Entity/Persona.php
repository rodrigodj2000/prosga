<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Persona
 */
class Persona
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
    private $apellido;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $obligaciones;

    /**
     * @var Cargo
     */
    private $cargo;

    /**
     * @var Usuario
     */
    private $usuario;

    /**
     * @var Estado
     */
    private $estado;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var Indicador[]
     */
    private $indicadores;

    /**
     * @var ProcedimientoGeneral[]
     */
    private $procedimientosGenerales;

    /**
     * @var RegistroFP[]
     */
    private $registrosFichaDeProceso;

    /**
     * @var Actividad[]
     */
    private $actividades;



    public function __construct(){
        $this->indicadores = new ArrayCollection();
        $this->procedimientosGenerales = new ArrayCollection();
        $this->registrosFichaDeProceso = new ArrayCollection();
        $this->actividades = new ArrayCollection();
    }


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
     * @return Persona
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
     * Set apellido
     *
     * @param string $apellido
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Persona
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Persona
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set obligaciones
     *
     * @param string $obligaciones
     * @return Persona
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
     * Set Cargo
     *
     * @param Cargo $cargo
     * @return Persona
     */
    public function setCargo(Cargo $cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get Cargo
     *
     * @return Cargo 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set Usuario
     *
     * @param Usuario $usuario
     * @return Persona
     */
    public function setUsuario(Usuario $usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get Usuario
     *
     * @return Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set Estado
     *
     * @param Estado $estado
     * @return Persona
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

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Persona
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


    public function addIndicador(Indicador $indicador){
        $this->indicador[] = $indicador;
    }

    public function removeIndicador(Indicador $indicador){
        $this->indicadores->removeElement($indicador);
    }

    public function getIndicadores(){
        return $this->indicadores;
    }

    public function addProcedGeneral(ProcedimientoGeneral $procedGeneral){
        $this->procedimientosGenerales[] = $procedGeneral;
    }

    public function removeProcedGeneral(ProcedimientoGeneral $procedGeneral){
        $this->procedimientosGenerales->removeElement($procedGeneral);
    }

    public function getProcedimientosGenerales(){
        return $this->procedimientosGenerales;
    }

    public function addRegistroFichaDeProceso(RegistroFP $registroFP){
        $this->registrosFichaDeProceso[] = $registroFP;
    }

    public function removeRegistroFichaDeProceso(RegistroFP $registroFP){
        $this->registrosFichaDeProceso->removeElement($registroFP);

    }

    public function getRegistrosFichaDeProceso(){
        return $this->registrosFichaDeProceso;
    }

    public function __toString(){
        return $this->nombre . " " . $this->apellido;
    }

    public function addActividad(Actividad $actividad){
        $this->actividades[] = $actividad;
    }

    public function removeActividad(Actividad $actividad){
        $this->actividades->removeElement($actividad);

    }

    public function getActividades(){
        return $this->actividades;
    }

    

}
