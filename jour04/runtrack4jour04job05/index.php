<?php
$phrase = "On n est pas le meilleur quand on le croit mais quand on le sait";

$compteur = [
    "voyelles" => 0,
    "consonnes" => 0
];

$listeVoyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
for ($i = 0; $i < strlen($phrase); $i++) {
    $caractere = $phrase[$i];
    if (in_array($caractere, $listeVoyelles)) {
            $compteur["voyelles"]++;
        } else {
            $compteur["consonnes"]++;
        }
    }


echo "<table>";
echo "<tr><th>Voyelles</th><th>Consonnes</th></tr>";
echo "<tr><td>" . $compteur["voyelles"] . "</td><td>" . $compteur["consonnes"] . "</td></tr>";
echo "</table>";
?>
