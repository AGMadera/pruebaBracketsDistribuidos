<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 15/04/16
 * Time: 4:22 PM
 */



session_start();
//var_dump( $_SESSION['usuario']);

$array=$_SESSION['usuario'];
$array2= $_SESSION['datos'];
$array3=$_SESSION['tabla'];



//$json= json_encode($array);
//print_r($array);


//echo $array['foto'];

/*
foreach($array as $row =>$v) {

    //echo "<br>".$row;
    /*
        for($i=0;$i<count($v);$i++){

            echo $v[$i];

        }
    */

    /*
        foreach (array_values($v) as $v2) {
            echo $v2 . "\n";
        }*/
//}



?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Usuario: <?php echo $array['id_cliente2'];?> </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Proyecto Aplicacione Distribuidas</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="../Formularios/pruebaindex.html">Home</a></li>
                <li ><a href="../Formularios/alta.html">Alta</a></li>
                <li class="active"><a href="../Formularios/buscarUsuario.html">Buscar usuario</a></li>
                <li ><a href="../Formularios/mostrarTodos.html">Ver usuarios</a></li>
                <li><a href="../Formularios/borrar.html">Borrar usuario</a></li>
                <li><a href="../Formularios/formulario.html">Nueva amortizacion</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>

<table class="table table-hover">
    <thead>
    <tr class="success">
        <th>Id</th>
        <th>Nombre</th>
        <th>E-mail</th>
        <th>Foto</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $array['id_cliente2']; ?></td>
        <td><?php echo $array['nombre']; ?></td>
        <td><?php echo $array['email']; ?></td>
        <td><img src="<?php echo $array['foto']; ?>"  style="width:50px;height:50px;" ></td>

    </tr>


    </tbody>

</table>

<?php

if($array2==0){
    ?>
    <h1 align="center">El usuario <?php echo $array['nombre']; ?> no ha realizado ninguna amortizacion</h1>
<?php
}else{
?>
<h2 align="center">

        Saldo: <?php echo $array2['saldo']; ?>
        Interes Anual: <?php echo $array2['interes_anual']; ?>
        Numero de meses: <?php echo $array2['num_meses']; ?>
</h2>

<table class="table table-striped">
    <thead>
    <tr class="info">
        <th><?php echo implode('</th><th>', array_keys(current($array3))); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($array3 as $row): array_map('htmlentities', $row); ?>
        <tr>
            <td><?php echo implode('</td><td>', $row); ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

</body>
<div class="container">

    <form class="form-signin" action="../PDFs/Imprimir.php" method="GET" id="formulario" role="form">

        <input type="submit" value="Generar PDF" class="btn btn-lg btn-primary btn-block" name="pdf" />
    </form>
</div>
</html>

<?php
}





//session_unset();
//session_destroy();
?>






