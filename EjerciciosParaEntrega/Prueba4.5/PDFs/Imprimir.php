<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 17/04/16
 * Time: 7:15 PM
 */



session_start();


$array=$_SESSION['usuario'];
$array2= $_SESSION['datos'];
$array3=$_SESSION['tabla'];
$codigoHTML='

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px;     width: 100%; text-align: left;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #9acd32;
    border-top: 1px solid #9acd32;    border-bottom: 1px solid #fff; color: #000; }

td {    padding: 8px;     background: #e8edee;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }



</style>
    <title>Reporte</title>



</head>
<body>


        <h1 align="center">'. $array['nombre']."<br>" .'<img src="'.$array['foto'].'"  style="width:100px;height:80px;" ></h1>

        <h4 align="center">
        Id: '. $array['id_cliente2'].' &nbsp;&nbsp;&nbsp;
        E-mail: '. $array['email'].'
</h4>
<h3 align="center">

    Saldo: '. $array2['saldo'].',&nbsp;
    Interes Anual: '. $array2['interes_anual'].',&nbsp;
    Numero de meses: '. $array2['num_meses'].'
</h3>

<table  >
    <thead>
    <tr  >
        <th>Mes</th>	<th>Saldo Insoluto</th>	<th>Cuota Fija</th> <th>Intereses</th>	<th>Mensualidad</th>
    </tr>
    </thead>
    <tbody>';


     $i=0;
    foreach ($array3 as $row=>$v):
//aqui
        $codigoHTML.='
            <tr>
                <td align="center">'. $v['Mes'].'</td>
                <td align="center">'. $v['Saldo_Insoluto'].'</td>
                <td align="center">'. $cf[$i]=$v['Cuota_Fija'].'</td>
                <td align="center">'. $in[$i]=$v['Intereses'].'</td>
                <td align="center">'. $me[$i]=$v['Mensualidad'].'</td>

             </tr>';

     $i++; endforeach;
//aca
$codigoHTML.='

    <tr>
        <td align="center" bgcolor="#aaad20">Totales</td>
        <td align="center" bgcolor="#aaad20"> 0</td>
        <td align="center" bgcolor="#aaad20">'. array_sum($cf) .'</td>
        <td align="center" bgcolor="#aaad20">'. array_sum($in) .'</td>
        <td align="center" bgcolor="#aaad20">'. array_sum($me) .'</td>
    </tr>
    </tbody>
</table>

</body>

</html>';

//echo $codigoHTML;

require_once("dompdf/dompdf_config.inc.php");
$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ReporteAmortizacion".$array['id_cliente2'].".pdf");
session_unset();
session_destroy();
?>
