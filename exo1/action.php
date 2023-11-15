<?php
if (!empty($_POST['nom']) && !empty($_POST['cours'])) {
    echo "Bonjour, vous êtes professeur " . $_POST['nom'] . ".\n";
    echo "Vous donnez le cours " . $_POST['cours'] . ".";
} else {
    echo "Il faut remplir les champs.";
}
?>
