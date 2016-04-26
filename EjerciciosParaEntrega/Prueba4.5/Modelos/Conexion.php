<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 13/03/16
 * Time: 3:02 PM
 */
class Conexion
{
    private $servidor;
    private $usuario;
    private $contraseña;
    private $basedatos;
    public  $conexion;

    public function __construct(){
        $this->servidor   = "localhost:8889";
        $this->usuario	  = "root";
        $this->contraseña = "root";
        $this->basedatos  = "apidis";

    }

    function conectar(){
        $this->conexion= new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basedatos);

    }

    function cerrar(){
        $this->conexion->close();
    }

}