<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 14/04/16
 * Time: 1:08 AM
 */
class DAOTabla
{
    private $conexion;
    public function __construct()
    {
        require_once('Conexion.php');
        $this->conexion= new conexion();
        $this->conexion->conectar();
    }

    function leerArreglo($array){


    }

    function buscarTabla($id){

        $sql="SELECT * FROM amoriacion WHERE id_datos_amort='$id'";
        $resultados = $this->conexion->conexion->query($sql);
        $arreglo = array();

        while ($re=$resultados->fetch_array(MYSQLI_ASSOC)) {
            $arreglo[]=$re;
        }
        //$json=json_encode($arreglo);
        return $arreglo;

    }

}