<?php
/* 7. Расширьте конструкцию if из п.5-6, выводя фразу:
     "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).
*/

    $age = 59;

    if ((18 <= $age) && ($age <= 59))
    {
        echo 'You still work and work';
    }elseif ($age > 59){
        echo 'You have to retire';
    }elseif ((0 <= $age) && ($age <= 17)){
        echo 'It is too early for you to work';
    }

?>