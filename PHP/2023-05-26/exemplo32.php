<?php
    $vetor[0][0]="Elemento 0.0";
    $vetor[0][1]="Elemento 0.1";
    $vetor[1][0]="Elemento 1.0";
    $vetor[1][1]="Elemento 1.1";

    for($i=0; $i<2; $i++)
    {
        for($j=0; $j<2; $j++)
        {
            echo "O elemento da posição $i, $j é:";
            echo $vetor[$i][$j];
            echo "<br>";
        }
    }
?>