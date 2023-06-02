<?php
    include("conecta.php");                 // conectando ao banco de dados
    
    $codigo     = $_REQUEST['codigo'];      // pegando o codigo do html
    $descricao  = $_REQUEST['descricao'];   // pegando a nova descrição do html
    $qtd        = $_REQUEST['qtd'];         // pegando a nova quantidade do html

    $alterar = "UPDATE produtos SET
                codigo=$codigo,
                descricao='$descricao',
                qtd=$qtd)"; // criando a query sql

    $resultado = mysqli_query($link,$alterar) or die("Erro em alterar"); // executando query
    header("location:index.php"); // chamando de volta a pagina com o registro
?>