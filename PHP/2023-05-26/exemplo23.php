<?php
    $a=15;
    $b=15;
    $res=8+$a*3 + ++$b; // 8 + (15*3) + (1+15) => 8 + 45 + 16 => portanto
    echo "$b <br>"; // b = 16
    echo $res; // res = 69
?>