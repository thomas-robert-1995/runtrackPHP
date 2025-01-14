<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i <= 20) {
        echo "<i>$i</i><br>";
    }
    elseif ($i == 42) {
        echo "La Plateforme_<br>";
    }
    if ($i == 42) {
       continue;
    }
    if ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br>";
    }
  
    if ($i >= 50) {
        echo "$i<br>";
    }
    if ($i >= 21 && $i <= 24) {
        echo "$i<br>";
    }
}
