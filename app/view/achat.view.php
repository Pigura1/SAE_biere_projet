
<?php
session_start();
$panier = $_SESSION['panier'] ?? [];

?>

<h2>Votre panier</h2>

<?php if (empty($panier)): ?>
    <p>Votre panier est vide.</p>
<?php else: ?>
    <ul>
        <?php foreach ($achat as $article): ?>
            <li>
                <?php $article['nom'] ?> - <?php $article['prix'] ?> €
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


