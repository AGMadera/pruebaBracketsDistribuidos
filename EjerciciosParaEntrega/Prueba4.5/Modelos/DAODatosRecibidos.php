<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 14/04/16
 * Time: 12:00 AM
 */
class DAODatosRecibidos
{

    private $conexion;
    public function __construct()
    {
        require_once('Conexion.php');
        $this->conexion= new conexion();
        $this->conexion->conectar();
    }

    function guardarDatosRecibidos(DatosRecibidos $recibidos){

        $idCliente=(int)$recibidos->getIdCliente();
        $saldo=(float)$recibidos->getSaldo();
        $interesAnual=(int)$recibidos->getInteresAnual();
        $meses=(int)$recibidos->getNumeroMeses();
        //return var_dump($idCliente);


        $sql = "insert into datos_amort values(0,'$idCliente','$saldo','$interesAnual','$meses')";
        if ($this->conexion->conexion->query($sql)) {

            $sql2="SELECT id_datos_amort FROM datos_amort  WHERE id_cliente2 = $idCliente";

            if($resulatdos=$this->conexion->conexion->query($sql2)){
                $r=$resulatdos->fetch_array(MYSQLI_ASSOC);
                return $r['id_datos_amort'];
            }
            $this->conexion->cerrar();
            return "Datos guardados";

        } else {

            $this->conexion->cerrar();
            return "Error al guardar Datos Posiblemente el id no existe!!";
        }



    }


    function buscarDatosRecibidos($id){


            $sql2="SELECT * FROM datos_amort  WHERE id_cliente2 = $id";

            if($resulatdos=$this->conexion->conexion->query($sql2)) {
                if ($resulatdos->num_rows > 0) {
                    $r = $resulatdos->fetch_array(MYSQLI_ASSOC);
                } else {
                    $r = 0; //"no hay usuario";
                }
                $this->conexion->cerrar();
                return $r;
            }



    }

}