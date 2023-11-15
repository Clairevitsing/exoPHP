<?php

function NomberRowImages ($nomberImages, $imagesByRow){

    $nomberRows = ceil($nomberImages / $imagesByRow);

    $imagesLastRow = $nomberImages % $imagesByRow;

    return array ($nomberRows, $imagesLastRow);
}

function SoldeBancaire($depots,$retraits){
    $montantMoyenDepots = array_sum($depots)/count($depots);
    $montantMoyenRetraits = array_sum($retraits)/count($retraits);
    $soldeBancaire = array_sum($depots) - array_sum($retraits);

    return array (
        'montantMoyenDepots'=>$montantMoyenDepots, 
        'montantMoyenRetraits'=>$montantMoyenRetraits, 
        'soldeBancaire' => $soldeBancaire,
    );

}

function afficherRole($role) {
    // Afficher le texte en fonction de la valeur du rôle
    switch ($role) {
        case "admin":
            echo "Vous êtes l’administrateur du site";
            break;
        case "membre":
            echo "Vous êtes membre du site";
            break;
        case "gestionnaire":
            echo "Vous êtes gestionnaire du site";
            break;
        default:
            echo "Bienvenue invité";
    }
}