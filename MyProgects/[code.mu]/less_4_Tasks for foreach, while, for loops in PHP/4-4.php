<?php
/*  Задача №4
    Работа с foreach
    Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
    С помощью цикла foreach выведите эти слова в столбик.
 */

    $arr = ['html', 'css', 'php', 'js', 'jr'];
        foreach ($arr as $elem) {
            echo $elem.'<br>';
        }

?>