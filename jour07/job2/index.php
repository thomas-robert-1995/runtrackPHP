<?php
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}
if (isset($_POST['reset'])) {
    $nbvisites = 0;
}
setcookie('nbvisites', $nbvisites, time() + 3600);
echo $nbvisites;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur avec cookie</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    
    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>