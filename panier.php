<?php

require_once 'app/model/products.model.php'; 
require_once 'app/controller/controller.php';  

$achat = $_SESSION['achat'] ?? [];
$id_articles = array_keys($achat);

$db = getDatabaseConnexion(); 
$bieres = getSpecificBeers($db, $id_articles);

$bieresIndexed = [];
foreach ($bieres as $biere) {
    $bieresIndexed[$biere['id_articles']] = $biere;
}

$totalPanier = 0;

foreach ($achat as $id_articles => $quantite) {
    if (!isset($bieresIndexed[$id_articles])) continue;

    $fichebiere = $bieresIndexed[$id_articles];
    $montant = $fichebiere['Prix'] * $quantite;

    $achat[$id_articles] = [
        'quantite' => $quantite,
        'biere' => $fichebiere,
        'montant' => $montant
    ];

    $totalPanier += $montant;
}

include 'app/view/achat.view.php';
?>