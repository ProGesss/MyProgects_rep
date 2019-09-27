<?php
/*  Вычислить количество секунд в году и присвоить это значение переменной. Вычислить остаток от деления этого значения на 2
 */

    $day_seconds = 86400;
    $days_of_year = 365;
    $seconds_of_year = $day_seconds * $days_of_year / 2;

    echo $seconds_of_year;

?>

