<?php
//1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

    $array = [1 => 'html', 2 => 'css', 3 => 'php', 4 => 'js', 5 => 'jq'];

    foreach ($array as $elem) {
        echo $elem.'<br>';
    }

?>