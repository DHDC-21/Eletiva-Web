<?php
    include("conecta.php");
    $user=$_REQUEST['usuario']; // veio do HTML
    $pass=$_REQUEST['senha']; // veio do HTML
    $consulta="Select *from usuarios where usuario='$user' and senha='$pass'";
    $resultado=mysqli_query($link,$consulta)
        or die("Erro no select");

    if(mysqli_num_rows($resultado)>0) // o num_rows são as linhas que são retornadas
        // echo "Acesso liberado!";
        // chamar pela pagina liberada
        header('location:principal.html');
    else
        echo "Acesso negado!";
?>