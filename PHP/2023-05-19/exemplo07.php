<?php
    $num=500;
    function escopo(){
        $GLOBALS["num"]=$GLOBALS["num"]+5;
        echo $GLOBALS["num"]."<br>";
    }
    echo $num. "<br>";
    escopo();
?>