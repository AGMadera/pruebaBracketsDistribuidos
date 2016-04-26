<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 07/04/16
 * Time: 12:13 PM
 */

include("../Modelos/DAOCliente.php");
include("../Modelos/Cliente.php");

//echo "controlador Borrar Usuario <br>";

$id=$_POST['idUsuarioB'];
//echo "<br> el valor que trae es:  $id <br>";

$clienteB=new DAOCliente();
$re=$clienteB->borrarCliente($id);
//var_dump($re);

if(is_numeric($re)){
    ?>
    <!DOCTYPE html>
    <html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Refresh" content="3;url=http://localhost:8888/EjerciciosParaEntrega/Prueba4.5/Formularios/pruebaindex.html">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>Borrando</title>
    </head>

<body>
<div class="container">
    <div class="alert alert-success">
        <strong>Perfecto!</strong> El registro fue Borrado.
    </div>

</div>
    <?php
}else{
    ?>
    <!DOCTYPE html>
    <html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Refresh" content="4;url=http://localhost:8888/EjerciciosParaEntrega/Prueba4.5/Formularios/pruebaindex.html">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>Usuario No Encontrado</title>
    </head>

    <body>
    <div class="container">

        <div class="alert alert-warning">
            <a href="../Formularios/pruebaindex.html" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> Al Borrar.
        </div>

    </div>
    <?php
}