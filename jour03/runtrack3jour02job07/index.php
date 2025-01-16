<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$longueur = strlen($str);

for ($i = 0; $i < $longueur - 1; $i++) {
   echo $str[$i + 1];
}
echo $str[0];

?>
