<?php
require_once 'panier.php'
?>

<h1>Votre Panier</h1>

<table>
    <tr>
        <th>Bière</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Montant</th>
    </tr>

    <?php foreach ($achat as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['fichebiere']['Nom']) ?></td>
            <td><?= number_format($item['fichebiere']['Prix'], 2) ?> €</td>
            <td><?= $item['quantite'] ?></td>
            <td><?= number_format($item['montant'], 2) ?> €</td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Total : <?= number_format($totalPanier, 2) ?> €</h2>