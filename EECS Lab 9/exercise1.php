<?php
  echo "<table>";
  for ($row=0; $row <= 100; $row++){
    echo "<tr> \n";
    for($col=0; $col <= 100; $col++){
      if($row == 0 && $col == 0) echo "<td> </td>";
      elseif($row == 0) echo "<td> $col </td>";
      elseif($col == 0) echo "<td> $row </td>";
      else {
        $multiples = $row * $col;
        echo "<td> $multiples </td> \n";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
?>
