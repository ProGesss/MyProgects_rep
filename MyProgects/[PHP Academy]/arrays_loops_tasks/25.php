<?php
/*  25. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
    После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
 */
    $min = rand(-10, 50);
    $max = rand(51, 100);
    $a = range($min, $max);
    $maxCount = count($a);
    //var_dump($a);
    $b = 1;
    for($i=0; $i < $maxCount; $i=$i+2) {
        if($a[$i] > 0) {
            $b = $b * $a[$i];
        }
        else
            echo "Отрицательное число ". $a[$i];
    }
    echo " ". $b ."<br>";
    echo "Элементы больше нуля и не парные элементы ";
    for($i=1; $i < $maxCount; $i=$i+2) {
        if($a[$i] > 0){
            echo " " . $a[$i]." ";
        }
    }


?>