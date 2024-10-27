<?php
    function test(&$a1, &$b1){

        $a1 = $a1 +2;
        $b1 = $b1 +3;
        echo "a = $a1 , b =$b1 <br>";
    }

    $a = 10;
    $b = 10;
    test($a,$b);
    echo "A=$a , B=$b";
?>