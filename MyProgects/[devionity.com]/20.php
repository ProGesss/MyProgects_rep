<?php
/* Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
 */

    function arrayPint(array $myArray)
    {
        echo '<pre>';
        print_r($myArray);
        echo '</pre>';
    }
    $myArray = [1, 2, 3, 4, 5];
    arrayPint($myArray);

?>