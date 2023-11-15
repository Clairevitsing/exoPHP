<?php
require "data/pdo.php";
require "livre.php";

// Requête SQL pour récupérer tous les livres
$statement = $pdo->prepare("SELECT * FROM Livre");
$statement->execute();

$livres = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Date de publication</th>
        <th>Description</th>
        <th>Author</th>
    </tr>

    <?php foreach ($livres as $livre) : ?>
        <tr>
            <td><?php echo $livre['id']; ?></td>
            <td><?php echo $livre['titre']; ?></td>
            <td><?php echo $livre['date_publication']; ?></td>
            <td><?php echo $livre['description']; ?></td>
            <td><?php echo $livre['author']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>