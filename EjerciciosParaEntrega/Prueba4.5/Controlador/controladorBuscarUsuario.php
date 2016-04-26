<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 07/04/16
 * Time: 12:09 AM
 */
include("../Modelos/DAOCliente.php");
include("../Modelos/Cliente.php");
include("../Modelos/DAODatosRecibidos.php");
include("../Modelos/DAOTabla.php");

//echo "controlador Buscar Usuario <br>";

$id=$_GET['idUsuario'];
//echo "<br> el valor que trae es:  $id <br>";

$clienteB=new DAOCliente();
$re=$clienteB->buscarCliente($id);
$idC=$re['id_cliente2'];
//echo $idC;

$dr=new DAODatosRecibidos();
$d=$dr->buscarDatosRecibidos($idC);
$idD=$d['id_datos_amort'];
//echo $idD;

$dT=new DAOTabla();
$t=$dT->buscarTabla($idD);
//$idT=$t['id_datos_amort'];



if($re>0){
   // var_dump($re);

    session_start();
    $_SESSION['usuario']=$re;
    $_SESSION['datos']=$d;
    $_SESSION['tabla']=$t;



    ?>
    <html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <meta http-equiv="Refresh" content="2;url=http://localhost:8888/EjerciciosParaEntrega/Prueba4.5/Vistas/VistaMostrarUsuario.php">
    </head>
    <body>
    <h1 align="center">Cargando...</h1>
    </body>
    </html>

    <?php


}else{
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
    <title>Usuario No Encontrado</title>
</head>

<body>
<div class="container">

<div class="alert alert-warning">
    <a href="../Formularios/pruebaindex.html" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> No existe usuario con ese Id.
</div>

</div>
<?php
}
//var_dump($re);