<?php
    $prova1=2;
    $prova2=4;
    $prova3=6;
    $media = ($prova1*1 + $prova2*2 + $prova3*3)/6;

    if ($media<3)
        $desempenho="pifio";
    else if ($media<7)
        $desempenho="medio";
    elseif ($media<9)
        $desempenho="bom";
    else
        $desempenho="otimo";

    echo "<h1>Sesempenho</h1>";
    echo "Seu desempenho foi $desempenho"

?>