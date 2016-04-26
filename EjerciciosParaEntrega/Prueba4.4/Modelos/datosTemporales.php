<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 08/02/16
 * Time: 1:07 PM
 */

class datosTemporales
{

    private $saldo;
    private $interesAnual;
    private $numeroMeses;

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * @return mixed
     */
    public function getInteresAnual()
    {
        return $this->interesAnual;
    }

    /**
     * @param mixed $interesAnual
     */
    public function setInteresAnual($interesAnual)
    {
        $this->interesAnual = $interesAnual;
    }

    /**
     * @return mixed
     */
    public function getNumeroMeses()
    {
        return $this->numeroMeses;
    }

    /**
     * @param mixed $numeroMeses
     */
    public function setNumeroMeses($numeroMeses)
    {
        $this->numeroMeses = $numeroMeses;
    }



}