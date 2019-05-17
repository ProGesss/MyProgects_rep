<?php
/*  Задача №24
     В переменной $month лежит какое-то число из интервала от 1 до 12.
     Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
 */

    $month = 4;

    if ($month <= 2 or $month == 12){
        $time_of_year = 'Winter';
    }
    if ($month >= 4 and $month <= 8){
        $time_of_year = 'Summer';
    }
    if ($month >= 3 and $month <= 5){
        $time_of_year = 'Spring';
    }
    if ($month >= 9 and $month <= 11){
        $time_of_year = 'Autumn';
    }

        echo $time_of_year;

?>