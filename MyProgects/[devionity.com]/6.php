/* Создать форму, которая содержит поля name, email, phone.

*/

<form action="6.php" method="post">
    <p>name:  <input type="text" name="name" /></p>
    <p>email: <input type="text" name="email" /></p>
    <p>phone: <input type="text" name="phone" /></p>
    <p><input type="submit" /></p>
</form>
<?php

print_r($_POST);
// output
// Array ( [email] => admin@example.com )

?>


