<?php

    require('functions/fun.php');

    sayHello();

    $a = rand(1,20);
    $b = rand(50,100);
    echo "a = ".$a." b = ".$b." = ";
    $sum = sum($a, $b);
    echo $sum;


?>

