<?php

require_once 'app/model/products.model.php'; // contient getSpecificBeers
require_once 'app/controller/controller.php';  

$achat = $_SESSION['achat'] ?? [];
$id_articles = array_keys($achat);

$bieres = getSpecificBeers($Prix, $id_articles);

$bieresIndexed = [];
foreach ($bieres as $biere) {
    $bieresIndexed[$biere['id_articles']] = $biere;
}

$totalPanier = 0;

foreach ($achat as $id_articles => $quantite) {
    if (!isset($fichebiere[$id_articles])) continue;

    $fichebiere = $bieresIndexed[$id_articles];
    $montant = $fichebiere['Prix'] * $quantite;

    $achat[$id_articles] = [
        'quantite' => $quantite,
        'biere' => $biere,
        'montant' => $montant
    ];

    $totalPanier += $montant;
}

include 'app/view/achat.view.php';
?>