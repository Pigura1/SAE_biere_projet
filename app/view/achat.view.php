
<?php
session_start();
$panier = $_SESSION['panier'] ?? [];
?>

<h2>Votre panier</h2>

<?php if (empty($panier)): ?>
    <p>Votre panier est vide.</p>
<?php else: ?>
    <ul>
        <?php foreach ($panier as $article): ?>
            <li>
                <?= htmlspecialchars($article['nom']) ?> - <?= number_format($article['prix'], 2) ?> €
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


