<?php
/* Определить константы, которые соответствуют названиям нескольких стран мира.
   Используя эти константы, сформировать массив из соответствующих значений.
 */

    define('COUNTRY_1', 'USA');
    define('COUNTRY_2', 'CHINA');
    define('COUNTRY_3', 'GERMANY');
    define('COUNTRY_4', 'UKRAINE');
    define('COUNTRY_5', 'RUSSIA');
       $arr = [COUNTRY_1,
               COUNTRY_2,
               COUNTRY_3,
               COUNTRY_4,
               COUNTRY_5
       ];
       echo '<pre>';
       print_r($arr);
       echo '<pre>';

?>