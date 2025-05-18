<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/png" href="public/images/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <title>Cyb3r Heaven</title>
</head>
<body>
  <header>
 <nav>
  <ul>
    <li><a href="index.php?route=produit" data-text="PRODUITS">Produits</a></li>
    <li><a href="index.php?route=trombinoscope" data-text="À PROPOS">À propos</a></li>
    <li><a href="#" data-text="BRASSAGE">Brassage</a></li>
    <li><a href="index.php?route=home"><img src="public/images/logo.png" alt="Accueil" /></a></li>
    <li><a href="index.php?route=contact" data-text="NOUS CONTACTER">Nous contacter</a></li>
    <li><a href="index.php?route=achat" data-text="ACHAT">Achat</a></li>
    <li><a class="btn-login" href="index.php?route=compte">Compte</a></li>
  </ul>
</nav>
</header>