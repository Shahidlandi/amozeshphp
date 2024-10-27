<?php
    $num = 10;
    for($i = 1 ; $i <= $num; $i++) {
        if($i % 2 == 0){
            continue;
        }
        print "number = $i <br>";
        
    }
    print "FOR is End";
?>