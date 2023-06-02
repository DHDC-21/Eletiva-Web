<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de cadastro de produtos</title>
</head>
<body>
    <form action="incluir.php" method="post">
        <h1>Controle de Produtos</h1>
        <p>
            <table border="1">
                <tr>
                    <td>CODIGO: <input type="text" name="codigo" size="10"></td>
                    <td>DESCRIÇÃO: <input type="text" name="descricao" size="30"></td>
                    <td>QTDE: <input type="text" name="qtd" size="10"></td>
                    <td><input type="submit" value="INCLUIR"></td>
                </tr>
            </table>
        </p>
    </form>
    <?php
        include("conecta.php");
        $consulta = "Select * from produtos";
        $resultado = mysqli_query($link, $consulta) or die("Erro no select");
        echo   "<table border=1><tr>
                <td>CODIGO</td>
                <td>DESCRICAO</td>
                <td>QTDE</td></tr>";
        while($registro=mysqli_fetch_array($resultado))
        {
            echo "<tr>
                  <td>".$registro['codigo']."</td>
                  <td>".$registro['descricao']."</td>
                  <td>".$registro['qtd']."</td>
                  <td><a href='alterar.html'>Alterar</a></td>
                  <td><a href='deletar.html'>Deletar</a></td>
                  </tr>";
        }
    ?>
</body>
</html>