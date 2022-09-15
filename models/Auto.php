<?php
class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;

    public function __construct($patente, $marca, $modelo, $dniDuenio)
    {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo  = $modelo;
        $this->dniDuenio = $dniDuenio;
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

    public function getDniDuenio(){
        return $this->dniDuenio;
    }

    public function setDniDuenio($dniDuenio){
        $this->dniDuenio = $dniDuenio;
    }


}
