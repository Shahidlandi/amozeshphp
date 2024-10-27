<?php

    function add(&$a , $b){
        $a = $a + 3;
        $b = $a + $b;
    }

    $a = 5;
    $b = 10;

    add($b, $a);
    echo "A= $a , B= $b";
?>