
<?php
/*  13. Вывести таблицу умножения
 */

    const LEN = 3;

  $html = '<table border="1"><thead><th> - </th>';
  for($i = 1; $i <= LEN; $i++) {
      $html .= '<th>'.$i.'</th>';
  }

  $html .= "</thead><tbody>";

  for($i = 1; $i <= LEN; $i++) {
      $html .= '<tr><td>'.$i."</td>";
      for($j = 1; $j <= LEN; $j++) {
          $html .= '<td>'.$i*$j.'</td>';
      }
      $html .= '</tr>';
  }

  $html .= "</tbody></<table>";
  echo $html;


  ?>


