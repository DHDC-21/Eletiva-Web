<?php
    $a=10;
    $b=2;
    $res = ++$a * $b - $a--;
    
    /*
        ( (1+10) * 2 ) - 10
        11*2 - 10
        22 - 11
        11
    */
    
    $res += $b;
    /*
        11 + 2 = 13
    */

    echo "$a<br>"; // 12
    echo "$res";

    /* observação: nesse exercício o ++$ e --$ vêm antes da * ou / */
?>