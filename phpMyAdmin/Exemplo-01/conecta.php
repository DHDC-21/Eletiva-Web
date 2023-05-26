<?php
    $link=mysqli_connect("localhost","root","") // procure o banco de dados com ip, usuario, senha
    /* observações:
    quando se trabalaha remotamente, mudamos o localhost para o ip do servidor
    porem toda vez que o cliente precisar conectar não é necessario as mansagens */
        or die("Não achei o MySQL"); // se der erro, não achei o MySQL
    echo "Conexão bem sucedida!";
    
    mysqli_select_db($link,"exemplo1")
        or die("Não achei o Banco");
    echo "Banco encontrado";
    mysqli_close($link);
?>