<?php
/*12. С помощью конструкции switch выведите фразу: "Неизвестный день",
 если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).
*/

$day = 6;

switch ($day) {

    case 1:
        echo 'Это рабочий день<br>';
        break;
    case 2:
        echo 'Это рабочий день<br>';
        break;
    case 3:
        echo 'Это рабочий день<br>';
        break;
    case 4:
        echo 'Это рабочий день<br>';
        break;
    case 5:
        echo 'Это рабочий день<br>';
        break;
    case 6:
        echo 'Это выходной день<br>';
        break;
    case 7:
        echo 'Это выходной день<br>';
        break;
    default:
        echo ('This isnt number or number is > 7 or < 1');
}

?>
