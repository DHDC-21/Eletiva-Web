<?php
    $name[0]="Paulo";
    $name[1]="Atrid";
    $name[2]="Conceição";
    $name[3]="Mariana";
    $name[4]="Andre";
    echo "<h4> Lista de Clientes</h4>";
    echo "<table border='1' width='50%'>"; // abri uma tabela html
    for ($i=0;$i<=4;$i++)
    {
        echo "<tr>";
        $pos=$i+1; // criei uma variavel para contar a partir de 1
        echo "<td> Nome $pos: </td>";
        echo "<td> $name[$i] </td>";
        echo "<tr>";
    }
    echo "</table>";
?>