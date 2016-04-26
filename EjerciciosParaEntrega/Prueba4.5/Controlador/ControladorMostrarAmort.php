<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 08/02/16
 * Time: 10:54 PM
 */
include("../Modelos/logica.php");
include("../Modelos/DatosRecibidos.php");
include("../Modelos/datosTemporales.php");
include("../Modelos/DAODatosRecibidos.php");


if(empty($_POST['valor1'])||empty($_POST['valor2'])||empty($_POST['valor3'])){
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
        <strong>Error!</strong>
    </div>

</div>
<?php
}else {
    $idCliente=$_POST['valor'];
    $salario = $_POST['valor1'];
    $interesAnual = $_POST['valor2'];
    $meses = $_POST['valor3'];



    $objeto = new DatosRecibidos();
    $objeto->setIdCliente($idCliente);
    $objeto->setSaldo($salario);
    $objeto->setInteresAnual($interesAnual);
    $objeto->setNumeroMeses($meses);

    $dao=new DAODatosRecibidos;
    $rel=$dao->guardarDatosRecibidos($objeto);

    var_dump($rel);//Nos debe regresar  id_datos_amort

    $rel2=(int) $rel ;

    $logica = new Logica();
    $temporales = $logica->igualacionValores($objeto);

    $con=new mysqli("localhost","root","root","apidis");

    $i = 0;
    while ($i < $objeto->getNumeroMeses()) {
        $reduccionmes = $logica->ReduccionMes($temporales) ;
        ///
        $rm=(int)$reduccionmes;
        ///
        $temporales->setNumeroMeses($reduccionmes - 1);
        $saldoinsoluto = $logica->SaldoInsoluto($objeto, $temporales) . " ";
        //
        $sIn=(float)$saldoinsoluto;
        //
        $temporales->setSaldo($saldoinsoluto);
        $cuotaFija = $logica->CuotaFija($objeto) ;
        ///
        $cFij=(float)$cuotaFija;
        ///
        $cfA[$i] = $cuotaFija;
        $intereses = round($logica->Interes($objeto, $temporales, $temporales->getSaldo()), 2);
        //
        $inte=(float)$intereses;
        //
        $inA[$i] = $intereses;
        $mensualidad = $logica->Mensualidad($intereses, $cuotaFija);
        $menA[$i] = $mensualidad;
        ///
        $mens=(float)$mensualidad;
        ///


        $array[$i] = array(
            "Mes: " => $reduccionmes,
            "Saldo Insoluto: " => $saldoinsoluto,
            "Cuota Fija: " => $cuotaFija,
            "Intereses: " => $intereses,
            "Mensualidad: " => $mensualidad
        );

        $sql = "insert into amoriacion values(0,'$rel2','$rm','$sIn','$cFij','$inte','$mens')";
        if ($st=$con->query($sql)) {
            //echo "<br>. $sql.<br>";
            //echo "Usuario guardado".var_dump($st);

        } else {
            //echo "Error al guardar el usuario".var_dump($st);
        }

        $i++;
    }

    $con->close();
    //echo "<br>";
    $totales="Total ";

?>
    <!DOCTYPE html>
    <html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Amortizacion</title>

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
                    <li><a href="../Formularios/buscarUsuario.html">Buscar usuario</a></li>
                    <li><a href="../Formularios/mostrarTodos.html">Ver usuarios</a></li>
                    <li><a href="../Formularios/borrar.html">Borrar usuario</a></li>
                    <li class="active"><a href="#">Nueva amortizacion</a></li>
                </ul>
            </div>
        </div>
    </nav>








    <br><br><br>
    <table class="table ">
        <thead>
        <tr class="success">
            <th><?php echo implode('</th><th>', array_keys(current($array))); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($array as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr bgcolor="#9acd32">
            <td><?php echo $totales?></td>
            <td> <?php echo  $objeto->getSaldo()-$objeto->getSaldo() ?></td>
            <td><?php echo array_sum($cfA) ?></td>
            <td> <?php echo array_sum($inA) ?></td>
            <td> <?php echo array_sum($menA) ?></td>
        </tr>
        </tbody>
    </table>
    </body>

    </html>
<?php
}

//var_dump(array_values(current($array)));
//var_dump( array_keys(current($array)) );
/*
foreach ($array as $row):

    $c= array_map('htmlentities', $row);
print_r( $c );
    //echo implode('</td><td>', $row);
endforeach;
//var_dump($c);
echo "<br>";
//print_r($c);
*/

/*
foreach(array_values($array) as $key){
    echo $key."\n";

    foreach(array_keys($key) as $key3){
        echo $key3."\n";

    }
    foreach(array_values($key) as $key2){
        echo $key2."\n";

    }
}*/


//for($i=0;$i<count($array);$i++){

//}

//echo $json=json_encode($array);


?>





