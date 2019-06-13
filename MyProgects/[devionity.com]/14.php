<?php
/*  Создать алгоритм вычисления максимального значения двух переменных при помощи switch
 */

    $a = 13;
    $b = 14;

    switch($a <=> $b){
        case -1:
            echo 'a < b';
            break;
        case 0:
            echo 'a = b';
            break;
        case 1:
            echo 'a > b';
            break;
        case 'default':
            echo 'sorry';

default: echo 'Sorry man';
    }


    //or

    $d = ($a-$b);
    switch ($d) {
        case 0: echo "равны";  	break;
        default:
            $d2 = ($a-$b)/abs($a-$b);
            switch ($d2) {
                case 1: echo $a;  	break;
                case -1: echo $b; 	break;
            };
    }


    function getMax($a,$b){
        switch($a<$b){
            case true:
                return $b;
                break;//необязательно после return
            default:
                return $a;//$a либо больше $b, либо они равны (тогда подходит любое из них)
        }
    }

    echo max(2, 3);
    echo max(3, 3);
    echo max(3, 2);


?>