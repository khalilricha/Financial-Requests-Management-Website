<?php

// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'infosfinancement');

if ($conn->connect_error) {
    die('La connexion a échoué : ' . $conn->connect_error);
}



// Récupérez les données de la base de données
$sql = "SELECT * FROM myForm";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Informations des formulaires :</h2>";
    echo "<table>";
    echo "<tr><th>CodeDemande</th><th>CodeEvenement</th><th>CodeAgence</th><th>TypeFinancement</th><th>TypeIntervention</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . (isset($row["CodeDemande"]) ? $row["CodeDemande"] : "") . "</td>";
        echo "<td>" . (isset($row["CodeEvenement"]) ? $row["CodeEvenement"] : "") . "</td>";
        echo "<td>" . (isset($row["CodeAgence"]) ? $row["CodeAgence"] : "") . "</td>";
        echo "<td>" . (isset($row["TypeFinancement"]) ? $row["TypeFinancement"] : "") . "</td>";
        echo "<td>" . (isset($row["TypeIntervention"]) ? $row["TypeIntervention"] : "") . "</td>";
        echo "<td>" . ( $Cible = isset($row['Cible']) ? $row['Cible'] : "") . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucune donnée de formulaire n'a été trouvée.";
}

$conn->close();
?>