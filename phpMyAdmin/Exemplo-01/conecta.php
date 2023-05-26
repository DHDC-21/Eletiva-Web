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
    //mysqli_close($link);

    /* anotações:
     *
     * 1º Criar o banco de dados em phpMyAdmin
     *  exemplo1
     * 
     * 2º Criar a tabela __usuarios__ com 2 camps
     *  usuario varchar 10
     *  senha   int     5
     * 
     * 3º Inserir dois usuários
     * */
?>