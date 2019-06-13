<?php
/*  Вычислить значение выражения: false && true || false && true || !false && true
    Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.
 */

    echo false && true || false && true || !false && true.'<br>';

    $x = 13;
    var_dump((bool)($x%2));


    //or

/*
    $x = 10;
    if (fmod($x, 2)>0) {echo "true";}
    else {echo "false"; }
*/

    //return 6 % 2 > 0
    //(fmod($x, 2)>0)  === (($x % 2)>0)
    //print_r(!!($x%2));
    //echo $x % 2 == 0 ? 'true' : 'false';
    //

?>