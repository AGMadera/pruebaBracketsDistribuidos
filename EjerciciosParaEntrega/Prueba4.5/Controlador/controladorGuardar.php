<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 14/03/16
 * Time: 1:20 PM
 */
include("../Modelos/DAOCliente.php");
include("../Modelos/Cliente.php");

$nombre=$_POST['nombre'];
$email=$_POST['correo'];
$ruta=$_FILES['imagen'];


//echo "controlador <br>";
//echo $nombre;
$cliente=new Cliente();
$cliente->setNombre($nombre);
$cliente->setEmail($email);
$cliente->setRutaImagen($ruta);


//var_dump ($cliente);

$dao=new DAOCliente();
$result=$dao->guardarCliente($cliente);

//echo $result;

if(is_numeric($result)){
?>
    <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Guardar</title>
</head>

<body>
<div class="container">
    <div class="alert alert-success">
    <strong>Perfecto!</strong> El registro fue un exito.
  </div>
  <div class="alert alert-info">
    <a href="../Formularios/pruebaindex.html" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Info!</strong> Es importante que guardes tu ID que es: <?php
      echo $result
      ?>
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
    <meta http-equiv="Refresh" content="2;url=http://localhost:8888/EjerciciosParaEntrega/Prueba4.5/Formularios/pruebaindex.html">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>No Guardado!</title>
</head>

<body>
<div class="container">

<div class="alert alert-danger">
    <a href="../Formularios/pruebaindex.html" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong>
</div>

</div>
<?php
}

//if($result=="")