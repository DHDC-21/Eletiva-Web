<?php
    $a=10;
    $b=12;
    $c=14;
    $valor1=++$a-$b; // 11-12=-1
    // a=11, b=12, c=14
    $valor2=$b-- +$a++; // 12+11=23
    // a=11, b=12, c=14
    $valor3=-$a+$c++; // -12+14=2
    // a=11, b=12, c=15
    echo "Valor1=$valor1<br>Valor2=$valor2<br>Valor3=$valor3<br>";
    echo "A=$a<br>B=$b<br>C=$c<br"; //a=12, b=11, c=15
?>