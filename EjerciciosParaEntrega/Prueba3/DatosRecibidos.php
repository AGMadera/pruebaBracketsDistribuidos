<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 08/02/16
 * Time: 1:03 PM
 */
class DatosRecibidos
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
     * @return DatosRecibidos
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
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
     * @return DatosRecibidos
     */
    public function setInteresAnual($interesAnual)
    {
        $this->interesAnual = $interesAnual;
        return $this;
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
     * @return DatosRecibidos
     */
    public function setNumeroMeses($numeroMeses)
    {
        $this->numeroMeses = $numeroMeses;
        return $this;
    }


}