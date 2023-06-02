<?php
    $link=mysqli_connect("localhost","root","")
        or die("Não achei o MySQL");
    echo "Conexão bem sucedida!";

    mysqli_select_db($link,"loja_ads_manha")
        or die("Não achei o Banco");
    echo "Banco encontrado";
?>