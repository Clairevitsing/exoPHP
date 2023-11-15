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
<h2>Exercice 10 - base des données - bibliothèque</h2>

<?php

try {
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $pdo = new PDO($dsn, $user, $password, $options);

    // Création de la table Livre
    $createLivre = "
        CREATE TABLE IF NOT EXISTS Livre (
            id INT PRIMARY KEY AUTO_INCREMENT,
            titre VARCHAR(255) NOT NULL,
            date_publication DATE NOT NULL,
            description LONGTEXT NOT NULL, 
            author VARCHAR(255) NOT NULL
        )
    ";

    $pdo->exec($createLivre);
    echo "La table Livre a été créée avec succès.";

} catch (PDOException $e) {
    exit('Une erreur est survenue : ' . $e->getCode() . ' - ' . $e->getMessage());
}

try {
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $pdo = new PDO($dsn, $user, $password, $options);

    // Insertion de données dans la table Livre
    $insertData = "
        INSERT INTO Livre (titre, date_publication, description, author) VALUES
        ('Five', '2019-06-13', 'Evy regarde les cinq roses tatouées sur son avant-bras.', 'Marjy Noname'),
        ('Jamais Plus - : A tout jamais', '2023-01-11', 'La suite de Jamais plusLily, depuis que sa fille Emerson est née, lui a promis que le cycle de la violence ?', 'Colleen Hoover'),
        ('Troublemaker', '2022-09-22', 'Jun et Hazel habitent dans le même immeuble et sur le même palier mais pas grand-chose en commun. La jeune femme est loin de se douter que son voisin est particulièrement dangereux et que son métier consiste à rendre une justice tout à fait personnelle ?', 'Alfreda Enwy'),
        ('L\'As de coeur', '2021-09-02', 'Elle est née avec un don ; il a passé sa vie à dépouiller les casinos du monde entier pour un jour devenir le meilleur. Arrivé à son apogée, un seul obstacle se dresse devant lui : Tito Ferragni, sa némésis de toujours.Mondial de Poker, et...', 'Morgane Moncomble'),
        ('À tous les coeurs que j\'ai brisés', '2022-10-06', 'Nollan et Juliette ont neuf ans se rencontrent et tombent amoureux. Cet été-là, sur la plage où ils passent leurs vacanc déterminée à gravir les...', 'Laura S. Wild')
    ";

    $pdo->exec($insertData);
    echo "Les données ont été insérées avec succès.";

} catch (PDOException $e) {
    exit('Une erreur est survenue : ' . $e->getCode() . ' - ' . $e->getMessage());
}


?>
    
</body>
</html>