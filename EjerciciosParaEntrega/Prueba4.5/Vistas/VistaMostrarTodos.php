<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Todos los usuarios registrados</title>

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
                <li ><a href="../Formularios/buscarUsuario.html">Buscar usuario</a></li>
                <li class="active"><a href="#">Ver usuarios</a></li>
                <li><a href="../Formularios/borrar.html">Borrar usuario</a></li>
                <li><a href="../Formularios/formulario.html">Nueva amortizacion</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>

<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 15/04/16
 * Time: 5:18 PM
 */


session_start();
$array=$_SESSION['todos'];
//$json= json_encode($array);
//print_r($array);
//echo  count($array);
//echo $array[0];


//$arrayCortado=array_slice($array, 0, 3);

$arrayCortado=array_chunk($array, 3);
//var_dump($arrayCortado);
/*
foreach($array as $row =>$v) {

    echo $v['foto'];
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

$TAMANO_PAGINA=3;
$num=0;
if(empty($_GET["pagina"])) {
    $pagina = "";
    //$a = 0;

}else
    $pagina= $_GET["pagina"];

if(!$pagina){
    $inicio=0;
    $pagina=1;
    //$a = 0;
}else
    $inicio = ($pagina-1) * $TAMANO_PAGINA;

$num= count($array);
$total_paginas = ceil($num / $TAMANO_PAGINA);//# de paginas


?>
<div class="table-responsive">
<table class="table table-striped"><!--table-hover-->
    <thead>
    <tr class="success">
        <th>Id </th>
        <th>Nombre </th>
        <th>email </th>
        <th>foto </th>
    </tr>
    </thead>
    <tbody>
    <?php  foreach($arrayCortado[$pagina-1] as $row =>$v): ?>
        <tr>

                <td><?php echo $v['id_cliente2']; ?></td>
                <td><?php echo $v['nombre']; ?></td>
                <td><?php echo $v['email']; ?></td>
                <td><img src="<?php echo $v['foto'] ?>" style="width:50px;height:50px;"></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>

<?php
if($total_paginas>1){
    for($i=1;$i<=$total_paginas;$i++){
        if ($pagina == $i)
//si muestro el índice de la página actual, no coloco enlace
            echo $pagina . " ";
        else
//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
            print ("     <a href='VistaMostrarTodos.php?pagina=" . $i . "'>" . $i . "</a>        ");


    }//for
}//if
?>



</body>


</html>

</html>


