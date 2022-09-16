<?php
class Persona{
    private $Nro_dni;
    private $Nombre;
    private $Apellido;
    private $fechaNac;
    private $Telefono;
    private $Domicilio;
    private $Mensaje;

    public function __construct()
    {
        
    }

    public function cargar($dni, $nombre, $apellido, $nacimiento, $telefono, $domicilio)
    {
        $this->Nro_dni=$dni;
        $this->Nombre=$nombre;
        $this->Apellido=$apellido;
        $this->fechaNac=$nacimiento;
        $this->Telefono=$telefono;
        $this->Domicilio=$domicilio;

    }

    public function getNro_dni()
    {
        return $this->Nro_dni;
    }

    public function setNro_dni($Nro_dni)
    {
        $this->Nro_dni = $Nro_dni;

        return $this;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }

 
    public function getApellido()
    {
        return $this->Apellido;
    }


    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;

        return $this;
    }

    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }

    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function getDomicilio()
    {
        return $this->Domicilio;
    }

    public function setDomicilio($Domicilio)
    {
        $this->Domicilio = $Domicilio;

        return $this;
    }
    
    public function getMensaje()
    {
        return $this->Mensaje;
    }

    public function setMensaje($Mensaje)
    {
        $this->Mensaje = $Mensaje;

        return $this;
    }

     //funciones bd
     public function buscar($dni){
        $base = new BaseDatos();
        $consulta = "SELECT * FROM persona WHERE NroDni= " . $dni;
        $rta = false;
        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                if($row2 = $base->Registro()){
                    $this->setNro_dni($row2['pdocumento']);
                    $this->setNombre($row2['pnombre']);
                    $this->setApellido($row2['papellido']);
                    $this->setTelefono($row2['ptelefono']);
                    $persona = new Persona();
                    //$viaje->buscar($row2['NroDni']);
                    //$this->setIdviaje($viaje); (Esto se usaba para el tp final de ipoo)
                    $rta = true;
                }
            }else{
                $this->setMensaje($base->getError());
            }
        }else{
            $this->setMensaje($base->getError());
        }
        return $rta;
    }

    //AGREGAR LAS FUNCIONES QUE FALTAN INSERTAR, LISTAR, MODIFICAR, ELIMINAR
}