<?php
/* Задача №2
   В переменной $min лежит число от 0 до 59.
   Определите в какую четверть часа попадает это число (в первую, вторую, третью или четвертую).
 */

   $min = 10;

   if ($min >= 0 and $min <= 14) {
       echo 'В первую четверть.';
   }

   if ($min <= 15 and $min >= 30) {
       echo 'Во вторую четверть';
   }

   if ($min <= 31 and $min >= 45) {
       echo 'В третью четверть.';
   }

   if ($min >= 46 and $min <= 59) {
       echo 'В четвертую четверть.';
   }

?>


