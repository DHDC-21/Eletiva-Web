<?php
    $cidade[0][0] = "Campinas"; 
    $cidade[0][1] = "São Paulo"; 
    $cidade[1][0] = "Belo Horizonte"; 
    $cidade[1][1] = "Minas Gerais"; 
    $cidade[2][0] = "Macaé"; 
    $cidade[2][1] = "Rio de Janeiro";
    echo "<h4> Lista de Cidades </h4>";
    echo "<table border='1' width='70%'>";
    for($i=0;$i<=2;$i++)
    {
        echo "<tr>";
        echo "<td> CIDADE: </td>";
        echo "<td>";
        echo $cidade[$i][0];
        echo "</td>";
        echo "<td> ESTADO: </td>";
        echo "<td>";
        echo $cidade[$i][1];
        echo "</td>";
    }
    echo "</table>";
?>