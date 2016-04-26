<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 13/03/16
 * Time: 2:59 PM
 */
class Cliente
{
    private $id;
    private $nombre;
    private $email;
    private $rutaImagen;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Cliente
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRutaImagen()
    {
        return $this->rutaImagen;
    }

    /**
     * @param mixed $rutaImagen
     * @return Cliente
     */
    public function setRutaImagen($rutaImagen)
    {
        $this->rutaImagen = $rutaImagen;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return Cliente
     */
    public function setNombre($nombre)//
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}