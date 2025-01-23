<?php
// Étape 1: Connexion à la base de données
$servername = "localhost"; // Nom du serveur MySQL
$username = "root";        // Nom d'utilisateur MySQL (par défaut root pour les serveurs locaux)
$password = "";            // Mot de passe (par défaut vide pour les serveurs locaux comme XAMPP ou WAMP)
$dbname = "jour08";        // Nom de la base de données

// Créer une connexion
$db = new mysqli($servername, $username, $password, $dbname);

/// Étape 2 : Écriture de la requête SQL
$sql = "SELECT COUNT(id) AS nb_etudiant FROM etudiant";

// Étape 3 : Exécution de la requête
$result = $db->query($sql);

// Étape 4 : Affichage du résultat dans un tableau HTML
if ($result->num_rows > 0) {
    // Générer le tableau HTML
    echo "<table border='1'>";
    echo "<tr><th>nb_etudiants</th></tr>"; // En-tête du tableau

    // Récupérer les résultats
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['nb_etudiant'] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

?>