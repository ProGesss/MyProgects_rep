<?php
/* Задача №16
   Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'.
   Проверьте работу скрипта при $var, равном true, false.
   Напишите два варианта скрипта - с короткой записью и с длинной.
 */
//С короткой записью:
    $var = true;

    if ($var) {
         echo 'Верно';
    } else {
         echo 'Неверно';
    }

?>

<?php
//С длинной записью:
    $var = true;
    if ($var == true) {
        echo 'Верно';
    }else{
        echo 'Неверно';
    }

?>
