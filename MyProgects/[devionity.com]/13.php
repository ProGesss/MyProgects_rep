<?php
/*  Создать алгоритм вычисления максимального значения двух заданных переменных.
 */

    $a = 10;
    $b = 15;
        if ($a > $b) {
            echo '$a больше $b';
        } elseif ($a < $b) {
            echo '$b больше $a'.'<br>';
    }


        //or
    echo ($a == max($a, $b) ? '$a' : '$b') . ' больше';


?>

