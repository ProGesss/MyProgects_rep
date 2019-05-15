<?php
/*  Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')? $en = array('green', 'red','blue')? $ru = array('зеленый', 'красный', 'голубой')?

 */
    $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
    $en = [];
    $ru = [];
        foreach ($arr as $itemEn => $itemRu) {
            $en[] = $itemEn;
            $ru[] = $itemRu;
}
        echo '<h2>Английские названия</h2>';
        echo '<pre>';
        print_r($en);
        echo '</pre>';

        echo '<h2>Русские названия</h2>';
        echo '<pre>';
        print_r($ru);
        echo '</pre>';


?>

<?php
    //or
    $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
        foreach ($arr as $key=>$elem) {
            $en[] = $key;
            $ru[] = $elem;
    }
        var_dump($en);
        var_dump($ru);
?>
