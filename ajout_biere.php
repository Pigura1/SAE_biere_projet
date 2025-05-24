<?php
session_start();

if (!isset($_SESSION['achat'])) {
    $_SESSION['achat'] = [];
}

$id = $_POST['id_articles'] ?? null;
$quantite = $_POST['quantite'] ?? null;

if (!is_numeric($id_artciles) || !is_numeric($quantite) || $quantite < 1) {
    header("Location: app/view/product.view.php?error=invalid_data");
    exit;
}

$id_articles = (int)$id_articles;
$quantite = (int)$quantite;

if (isset($_SESSION['achat'][$id_articles])) {
    $_SESSION['achat'][$id_articles] += $quantite;
} else {
    $_SESSION['achat'][$id_articles] = $quantite;
}

header("Location: app/view/achat.view.php?message=bierre_ajoutee");
exit;
?>