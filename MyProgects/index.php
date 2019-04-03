<?php

//echo "<html><head>";
//echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
//echo "<title>Моя первый PHP скрипт</title>";
//echo "</head>";
//echo "<body>";
//echo "<h1>Привет! Я PHP скрипт!</h1>";
//echo "</body>";
//echo "</html>";
//echo date('d.m.Y H:i:s').'<br>';

//$variable = 'var 1';
//$variableTwo = 'var 2';
//
//$variableTree = & $variableTwo;
//
//echo $variableTree;
//
//$variableTree = 'change me';
//
//echo $variableTwo;
//
//print_r(['1', '2', '3']);

//define('DELIVERY_TYPE_NOVA_POSHTA', 'Новая Почта');
//define('DELIVERY_TYPE_UKR_POSHTA', 'Укр Почта');
//
//echo DELIVERY_TYPE_NOVA_POSHTA;
//echo '<br>';
//echo DELIVERY_TYPE_UKR_POSHTA;
//echo '<br>';
//echo __LINE__;
//echo '<br>';
//echo __FILE__;

//$priceOne = 100;
//$priceTwo = 200;
//
//$priceTree = $priceOne + $priceTwo;
//echo $priceTree;
//
//echo '<br>';
//
//$varOne =1;
//$varOne +=10;
//
//echo $varOne;

//echo $varOne = 'one' .''.'two';


//$boolean = false; //of false
//
//$integerVar = ['qwerty' => 'hello', 'php'];
//
//unset($integerVar[0]);
//print_r($integerVar);


//$price = ['sting', 123, false];
//
////print_r
//var_dump($price);

//$price = 12.55;
//$priceTwo = 13.13;
//if(($priceTwo + $price) < 20) {
//    echo 'Less 20';
//
//}elseif (($priceTwo + $price) < 30){
//    echo 'Less 30';
//}else{
//    echo 'More then 30';
//}
//echo '<br>';
//echo 'Next';

$deliveryType = 'express';

if($deliveryType == 'nova_poshta'){
    echo 'nova_poshta';
}elseif ($deliveryType == 'ukr_poshta'){
    echo 'ukr_poshta';
}elseif ($deliveryType == 'express'){
    echo 'express';
}else{
    echo 'GO HOME';
}

switch ($deliveryType){
    case 'nova_poshta':
        echo 'nova_poshta';
        dreak;
    case 'ukr_poshta':
        echo 'ukr_poshta';
        dreak;
    case 'express':
        break;
    default:
        echo 'GO HO1ME';
        break;
}

?>

fd