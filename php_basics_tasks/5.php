<?php
/* 5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии,
что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).
*/

$age = 34;

if ((18 <= $age) && ($age <= 59))
{
    echo 'You still work and work';
}else{
    echo 'The number does not fall into the range';
}

?>