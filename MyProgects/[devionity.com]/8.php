/* Создать форму с полями name, email, phone.
   Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран.
   Восстановить массив из полученной строки и вывести на экран.
*/

<form action="8.php" method="post">
    <p>name:  <input type="text" name="name" /></p>
    <p>email: <input type="text" name="email" /></p>
    <p>phone: <input type="text" name="phone" /></p>
    <p><input type="submit" /></p>
</form>
<?php

echo $str  = serialize($_POST);

echo '<br>';

$arr = unserialize($str);
print_r($arr);

// output
// Array ( [email] => admin@example.com )

?>


