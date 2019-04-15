<?php
//6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.

$age = 60;

if ((18 <= $age) && ($age <= 59))
{
    echo 'You still work and work';
}elseif
    ($age> 59){
    echo 'You have to retire';
}

?>