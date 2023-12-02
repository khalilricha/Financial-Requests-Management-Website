<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infosfinancement";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupérer les valeurs des champs
$CodeDemande = $_POST["CodeDemande"];
$CodeEvenement = $_POST["CodeEvenement"];
$CodeAgence = $_POST["CodeAgence"];
$TypeFinancement = $_POST["TypeFinancement"];
$TypeIntervention = $_POST["TypeIntervention"];
$Cible = $_POST["Cible"];

// Insérer les données dans la base de données
$sql = "INSERT INTO formulaire (CodeDemande, CodeEvenement, CodeAgence, TypeFinancement, TypeIntervention, Cible) VALUES ('$CodeDemande', '$CodeEvenement', '$CodeAgence, $TypeFinancement, $TypeIntervention, $Cible')";

if ($conn->query($sql) === TRUE) {
    echo "Les données ont été insérées avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
</head>
<body>

    <h2>Résultats du formulaire :</h2>

    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formulaire_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Récupérer les données de la base de données
    $sql = "SELECT * FROM formulaire_data";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                </tr>";

        // Afficher les données dans un tableau
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nom"] . "</td>
                    <td>" . $row["prenom"] . "</td>
                    <td>" . $row["email"] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }

    $conn->close();
    ?>

</body>
</html>

