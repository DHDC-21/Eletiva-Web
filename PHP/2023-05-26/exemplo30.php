<?php
    for ($cont=30; $cont>=0; $cont--) {
        echo "A variavel \$cont vale $cont";
        echo "<br>";
    }
    $cont = ++$cont;
    echo "Terminou em: $cont";
?>