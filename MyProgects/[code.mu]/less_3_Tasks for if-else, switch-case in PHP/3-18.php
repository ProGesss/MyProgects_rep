<?php
/*  Работа с OR и AND
    Задача №18
    Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'.
    Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
 */

    $a = 5;
    if ($a > 0 and $a < 5){
        echo 'Верно';
    }else{
        echo 'Неверно';
    }

?>