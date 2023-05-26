<?php
    $vetor=array(1,2,3,4,5,6,7,8,9,10);
    echo $vetor[1]."<br>"; // valor em posição especifica
    foreach($vetor as $x) // pega casa elemento e joga no x
    {
        echo "O valor atual do vetor é $x <br>";
    }
    echo "Mostrei todos os elementos do vetor";
?>