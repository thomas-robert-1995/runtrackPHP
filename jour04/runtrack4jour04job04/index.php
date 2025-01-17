<?php
$array = ["nom" => $_POST["nom"] ,"prenom" => $_POST["prenom"],"age" => $_POST["age"]];
echo "<table border='1' >";
echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
foreach ($array as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="nom">Nom :</label>
        <input type="$_post" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="$_post" id="prenom" name="prenom" required><br><br>

        <label for="age">Âge :</label>
        <input type="$_post" id="age" name="age" min="0" required><br><br>

        <Input type="submit">Envoyer</Input><br><br>
    </form>
</body>

</html>