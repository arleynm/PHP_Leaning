<?php
    //booleano condicional
    $a = true;

    if(is_bool($a)){
        echo "É booleano 1!";
    }

    if(is_bool(12)){
        echo "É booleano 2!";
    }

    if(is_bool(false)){
        echo "É booleano 3!";
    }

    if(0 ==false){
        echo "0 é considerado falso! <br>";
    }
?>