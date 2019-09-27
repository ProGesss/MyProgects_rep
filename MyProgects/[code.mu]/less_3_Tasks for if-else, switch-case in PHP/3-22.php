<?php
/*  На switch-case
    Задача №22
    Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
    Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее.
    Решите задачу через switch-case.
 */

    $num = 3;

    switch ($num) {
        case '1';
            $result = 'Зима';
            break;
        case '2';
            $result = 'Лето';
            break;
        case '3';
            $result = 'Весна';
            break;
        case '4';
            $result = 'Осень';
            break;
    }

    echo $result;

?>