<?php
    $num=500;
    function escopo()
    {
        global $num; 
        /* pega a variuavel global em qualuqer parte do código */
        $num=$num+5;
        echo $num;
    }
    echo $num. "<br>";
    escopo();
    // em casos de erro o php mostra o que esta errado na sintaxe.
?>