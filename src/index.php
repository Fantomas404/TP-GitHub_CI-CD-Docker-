<?php
$personnes = [];

if (isset($_POST['nom']) && isset($_POST['age'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $age = (int) $_POST['age'];

    $personnes[] = [
        'nom' => $nom,
        'age' => $age
    ];

    echo "Personne ajoutée avec succès";
}
?>

<form method="post">
    Nom : <input type="text" name="nom" required><br><br>
    Âge : <input type="number" name="age" required><br><br>
    <button type="submit">Ajouter</button>
</form>
