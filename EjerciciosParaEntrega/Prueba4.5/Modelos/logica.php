<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 08/02/16
 * Time: 1:09 PM
 */

class Logica
{


    function igualacionValores(DatosRecibidos $recibidos)
    {
        $temporales = new datosTemporales();
        $temporales->setIdCliente($recibidos->getIdCliente());
        $temporales->setSaldo($recibidos->getSaldo());
        $temporales->setInteresAnual($recibidos->getInteresAnual());
        $temporales->setNumeroMeses($recibidos->getNumeroMeses());

        return $temporales;
    }

    function ReduccionMes(datosTemporales $temporales)
    {
            return $temporales->getNumeroMeses();
    }

    function SaldoInsoluto(DatosRecibidos $recibidos, datosTemporales $temporales)
    {
        $a=$recibidos->getNumeroMeses();
        $b=$recibidos->getSaldo();
        $c=$temporales->getSaldo();
        if($c==$b){
            return $c;
        }
        else {
            return $c - ($b / $a);
        }

    }

    function CuotaFija(DatosRecibidos $recibidos)
    {
        return $recibidos->getSaldo() / $recibidos->getNumeroMeses();
    }

    function Interes(DatosRecibidos $recibidos,datosTemporales $temporales,$num){
        return $num*(($temporales->getInteresAnual()/100)/$recibidos->getNumeroMeses());
    }

    function Mensualidad($interes,$cuota){
        return $interes+$cuota;
    }


}
//echo "estas en logica";




