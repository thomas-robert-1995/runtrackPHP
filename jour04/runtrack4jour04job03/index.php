 <?php
$str = "Dans l'espace, personne ne vous entend crier";
$length = strlen($str); // Longueur de la chaîne

for ($i = 0; $i < $length; $i += 2) {
    echo $str[$i];
}
?>