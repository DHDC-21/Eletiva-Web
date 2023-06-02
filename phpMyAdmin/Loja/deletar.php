<?php
    include("conecta.php");                 // conectando ao banco de dados
    
    $codigo     = $_REQUEST['codigo'];      // pegando o codigo do html
    /*
    $descricao  = $_REQUEST['descricao'];   // pegando a descrição do html
    $qtd        = $_REQUEST['qtd'];         // pegando a quantidade do html
    */
    
    $deletar = "DELETE FROM produtos 
                WHERE codigo == $codigo"; // criando a query sql

    $resultado = mysqli_query($link,$deletar) or die("Erro deletar"); // executando query
    header("location:index.php"); // chamando de volta a pagina com o registro
?>