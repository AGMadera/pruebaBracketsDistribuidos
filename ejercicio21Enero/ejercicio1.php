<?php

$tabla=5;
$inicio=6;
$fin=10;
$inicio2=16;

echo "inicio en 6 y termino en 10 <br>";
while($inicio<=$fin){
        $tem=$tabla*$inicio;
        echo "$tabla*$inicio=$tem <br>";
        $inicio++;

}

echo "<br>";
echo "inicio en 16 y termino en 10 <br>";
while($inicio2>=$fin){
        $tem=$tabla*$inicio2;
        echo "$tabla*$inicio2=$tem <br>";
        $inicio2--;
}



?>
