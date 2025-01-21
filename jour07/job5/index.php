<?php
// var_dump($_GET); 
$countGet = count($_GET);

echo("Le nombre d'arguments est : $countGet");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="nom">Nom :</label>
        <input type="$_GET" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="$_GET" id="prenom" name="prenom" required><br><br>

        <label for="age">Âge :</label>
        <input type="$_GET" id="age" name="age" min="0" required><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>


