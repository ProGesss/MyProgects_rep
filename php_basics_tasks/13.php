<?php
/* 13. Заданы две переменные: s - длина участка, который проехал автомобиль;
t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.
*/

$s = 475;
$t = 5;

$speed = $s / $t;
echo $speed . 'км/ч <br>';

$speed = $speed  * 1000 / 3600;
echo $speed . 'м/сек';

?>