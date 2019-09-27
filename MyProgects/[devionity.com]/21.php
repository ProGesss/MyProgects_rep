<?php

/*  Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
    В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r.
    По умолчанию использовать print_r
*/
    function test($a, $b = 'Foo', $c = 123)
    {
        echo "First arg: {$a} <br>";
        echo "Second arg: {$b} <br>";
        echo "Third arg: {$c} <br>";
        echo '<br>';
    }

    echo 'Lets try some calling <br>';

    test(1, 2, 3); // ok
    test(1, 2); // ok
    test(1);

?>