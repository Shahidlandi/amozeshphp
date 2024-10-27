<?php
    $n = 8000;
    $h = $n / 3600;
    print intval($h);
    print "<br>";
     echo intval($n % 3600 / 60);
     print "<br>";
     echo $n % 3600 % 60;
?>