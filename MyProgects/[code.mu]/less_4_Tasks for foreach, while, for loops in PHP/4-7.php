<?php
/*  Задача №7
    Работа с ключами
    Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
 */

    $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
    foreach ($arr as $key=>$elem) {
    echo $key.'-'.$elem.'<br>';
    }

?>