<?php
/*  Многомерные массивы
    Задание №17
    Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.
 */

    $arr = [
        'cms'=>['joomla', 'worpress', 'drupal'],
        'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];
    echo $arr['cms'][0].'<br>'; //joomla
    echo $arr['cms'][2].'<br>'; //drupal
    echo $arr['colors']['green'].'<br>'; //зеленый
    echo $arr['colors']['red']; //красный
?>