<?php
    include("conecta.php");                 // conectando ao banco de dados
    
    $codigo     = $_REQUEST['codigo'];      // pegando o codigo do html
    $descricao  = $_REQUEST['descricao'];   // pegando a descrição
    $qtd        = $_REQUEST['qtd'];         // pegando a quantidade

    $inserir = "INSERT INTO produtos
                    (codigo, descricao, qtd)
                VALUES
                    ($codigo, '$descricao' , $qtd)"; // criando o sql

    $resultado = mysqli_query($link,$inserir) or die("Erro no insert"); // executando query
    header("location:index.php"); // chamando de volta a pagina com o registro
?>