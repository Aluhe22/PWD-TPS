<?php
class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $rDniDuenio; //Referencia al objeto persona
    private $mensaje;

    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->rDniDuenio = "";
        $this->mensaje = "";
    }

    public function cargar($patente, $marca, $modelo, $dniDuenio, $mensaje)
    {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo  = $modelo;
        $this->rDniDuenio = $dniDuenio;
        $this->mensaje = $mensaje;
    }

    //Metodos de acceso
    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getPatente(){
        return $this->patente;
    }

    public function setPatente($patente){
        $this->patente = $patente;
    }

    public function getRDniDuenio(){
        return $this->rDniDuenio;
    }

    public function setRDniDuenio($rDniDuenio){
        $this->rDniDuenio = $rDniDuenio;
    }

    public function getMensaje(){
        return $this->mensaje;
    }

    public function setMensaje($mensaje){
        $this->mensaje = $mensaje;
    }

    public function __toString()
    {
        return "Patente: " . $this->getPatente() . 
        "\nMarca: " . $this->getMarca() . 
        "\nModelo: " . $this->getModelo() . 
        "\nDueño: " . $this->getRDniDuenio();
    }

    //Funciones BD
}
