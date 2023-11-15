<?php
include 'function.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!--exercice 1 & exercice 2-->
  <h1><?php echo "hello world" ?></h1>

  <p class="descriptionPhoto">insert une photo en utilisant php</p>

  <?php $imagePath = "./img/image.jpeg" ?>
  <img src="<?php echo $imagePath; ?>" alt="imageGiraffe">

  <!--exercice 3-->
 <h2>Exercice 3 - nombre d'image</h2>
 <?php 
 $case1 = NomberRowImages(3, 3);
  echo "s'il y a 3 images, nombre de ligne : {$case1[0]}, Nombre d'images sur la dernière ligne : {$case1[1]}";
  ?>
  <br>
<?php
 $case2 = NomberRowImages(8, 3);
  echo "s'il y a 8 images, nombre de ligne : {$case2[0]}, Nombre d'images sur la dernière ligne : {$case2[1]}";
  ?>
  <br>
 <?php
 $case3 = NomberRowImages(144, 3);
  echo "s'il y a 144 images, nombre de ligne : {$case3[0]}, Nombre d'images sur la dernière ligne : {$case3[1]}";
?>
<br>
 <?php
 $case4 = NomberRowImages(152, 3);
  echo "s'il y a 152 images, nombre de ligne : {$case4[0]}, Nombre d'images sur la dernière ligne : {$case4[1]}";
  ?>
  <br>
  <!--exercice 4-->
  <h2>Exercice 4 - dépôt-retrait-soldebancaire</h2>
  <?php
 $depots = array(122, 143, 45, 28);
 $retraits = array(12, 47, 60, 80);
 
 // Appeler la fonction
 $resultats = SoldeBancaire($depots, $retraits);
 // Afficher les résultats
 echo "Montant moyen des dépôts : {$resultats['montantMoyenDepots']}<br>";
 echo "Montant moyen des retraits : {$resultats['montantMoyenRetraits']}<br>";
 echo "Solde bancaire final : {$resultats['soldeBancaire']}<br>";
 ?>

<!--exercice 5-->
<h2>Exercice 5 - afficher un message</h2>
<?php

$message = "Bonjour, c’est moi. <br> T’es le bien venu sur mon site.";

echo "<p>$message</p>";
?>


<!--exercice 6-->
<h2>Exercice 6 - changer le prénom</h2>
<?php
$prenom = "claire";

$message = "Bonjour, c’est $prenom. <br> T’es le bien venu sur mon site.";

echo "<p>$message</p>";
?>

<!--exercice 7-->
<h2>Exercice 7 - afficher les messages selon le role</h2>
<?php
  afficherRole("admin");
  echo";<br>";
  afficherRole("membre");
  echo";<br>";
  afficherRole("gestionnaire");
  echo";<br>";
  afficherRole("guest");
  echo";<br>";
?>

<!--exercice 8-->
<h2>Exercice 8 - formulaire de professeur</h2>

<form  action="action.php" method="post">
   <label>nom de professeur :</label>
   <input name="nom" id="nom" type="text" />

   <label>Votre cours :</label>
   <input name="cours" id="cours" type="text" /></p>

   <button type="submit">Submit</button>
</form>

<!--exercice 9-->
<h2>Exercice 9 - classe sur livre</h2>
<?php

class Livre
{
    public int $id;
    public string $title;

    public function __construct(int $id, string $title)
    {
      $this->id = $id;
      $this->title = $title;
    }

    public function getTitle():string { 
        return $this->title;
    }

     public function setTitle(string $title): void{
        $this-> title = $title;
    }


}

$livre1 = new Livre(0,"Le Rouge et le Noir" );
echo "Title du livre : " . $livre1->getTitle() . "\n";?>
<br>
<?php
function nouveauLivre(int $id, string $title): livre
{
  $livre = new Livre($id, $title);

  return $livre;
}

$livre2 = nouveauLivre(1,"Les Misérables");
echo "Title du livre : " . $livre2->getTitle() . "\n";



?>


</body>
</html>