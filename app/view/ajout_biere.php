<?php


if (!isset($_SESSION['achat'])) {
    $_SESSION['achat'] = [];
}

$id_articles = $_POST['id_articles'] ?? null;
$quantite = $_POST['quantite'] ?? null;

$id_articles = (int)$id_articles;
$quantite = (int)$quantite;


if (!is_numeric($id_articles) || !is_numeric($quantite) || $quantite < 1) {
    header("Location: index.php?route=produit");
    exit;
}
var_dump('dddd') ; die();


if (isset($_SESSION['achat'][$id_articles])) {
    $_SESSION['achat'][$id_articles] += $quantite;
} else {
    $_SESSION['achat'][$id_articles] = $quantite;
}

var_dump($_SESSION); die();

header("Location: index.php?route=achat");
exit;
?>