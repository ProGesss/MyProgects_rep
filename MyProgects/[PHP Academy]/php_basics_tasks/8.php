<?php
/* 8. Расширьте конструкцию if из п.5-7, выводя фразу:
      "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.
*/

    $age = 25;

    if ((18 <= $age) && ($age <= 59))
    {
        echo 'You still work and work';
    }elseif ($age > 59){
        echo 'You have to retire';
    }elseif (($age < 18) && ($age > 0)){
        echo 'It is too early for you to work';
    }elseif ($age < 0) {
        echo 'The number is negative';
    }elseif (is_numeric ($age)) {
        echo 'Yes';
    } else {
        echo 'Unknown age';
    }

?>

