<?php
/* 27. Вывести таблицу умножения с помощью двух циклов for.
 */
?>

<html>
<body>
<table cellpadding="5" border = "1">
    <?php
    for($i = 0; $i < 10; $i++) {
        echo'<tr>';
        for($j = 0; $j < 10; $j++)
        {
            $s=$j*$i;
            echo '<td>';
            if($i==0 || $j==0) echo $i,$j;
            if(($s)%2==0) print "<font color= red> $s </font>";
            elseif(($s)%3==0) print "<font color= blue> $s </font>";
            elseif(($s)%5==0) print "<font color= green> $s </font>";
            else echo $s;
        }
    }
    ?>
</table>
</body>
</html>