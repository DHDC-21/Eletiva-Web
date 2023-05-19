<!--
    O PHP e o HTML podem ser embutidos 
-->

<html>
    <head>
        <title> Exemplo 02 - PHP </title>
    </head>
    <body>  
    <?php
        $data=date("d/m/Y",time());
        $hora=date("h:i",time());
    ?>
    <font size=5> Hoje é dia <?php echo $data ?> </font>
    <p> e agora são:
        <font style="colour=read"> <?php echo $hora ?></font>
    </p>
    </body>
</html>