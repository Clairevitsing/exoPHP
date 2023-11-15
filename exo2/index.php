<?php
require 'data/pdo.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--exercice 10-->
<h2>Exercice 10 - classe sur livre</h2>

<?php

try {
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $pdo = new PDO($dsn, $user, $password, $options);

    // Création de la table Users
    $createOffres = "
        CREATE TABLE IF NOT EXISTS Offres (
            id INT PRIMARY KEY AUTO_INCREMENT,
            date_creation DATE NOT NULL,
            titre VARCHAR(255) NOT NULL,
            description LONGTEXT NOT NULL
        )
    ";

    $pdo->exec($createOffres);
    echo "La table Offres a été créée avec succès.";

} catch (PDOException $e) {
    exit('Une erreur est survenue : ' . $e->getCode() . ' - ' . $e->getMessage());
}



try {
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $pdo = new PDO($dsn, $user, $password, $options);

    // Création de la table Users
    $createCandidatures = "
        CREATE TABLE IF NOT EXISTS Candidatures (
        id INT PRIMARY KEY AUTO_INCREMENT,
        date_candidature DATE NOT NULL,
        nom_candidat VARCHAR(255) NOT NULL,
        prenom_candidat VARCHAR(255) NOT NULL,
        email_candidat VARCHAR(255) NOT NULL,
        cv_candidat VARCHAR(255) NOT NULL,
        id_offre INT,
        FOREIGN KEY (id_offre) REFERENCES OffresEmploi(id))
    ";

    $pdo->exec($createOffres);
    $pdo->exec($createCandidatures);
    echo "La table Offres a été créée avec succès.";
    echo "La table Candidatures a été créée avec succès.";


} catch (PDOException $e) {
    exit('Une erreur est survenue : ' . $e->getCode() . ' - ' . $e->getMessage());
}

?>
    
</body>
</html>