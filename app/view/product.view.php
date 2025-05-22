<main> 
    <h1>Nos Cybeers</h1>
<div class="bieres-container">




    <?php foreach ($bieres as $biere): ?>
        <div class="biere-card">
            <a href="?route=fiche_biere&id_biere=<?= isset($biere["id_biere"]) ? htmlspecialchars((string)$biere["id_biere"]) : '#' ?>">
                <figure class="biere-photo">
                    <?php if (!empty($biere['image'])): ?>
                        <img src="public/images/small/<?= htmlspecialchars((string)$biere['image']) ?>" alt="photo de <?= htmlspecialchars((string)($biere['nom'] ?? 'Bière')) ?>" />
                    <?php else: ?>
                        <img src="public/images/small/bouteille_cybeer1.png"/>
                    <?php endif; ?>
                </figure>

                
                <div class="biere-infos">
                    <p class="biere-nom"><?= isset($biere["nom"]) ? htmlspecialchars((string)$biere["nom"]) : 'Nom inconnu' ?></p>
                    <p class="biere-prix">Prix : <span><?= isset($biere["prix"]) ? htmlspecialchars((string)$biere["prix"]) . " €" : 'Non indiqué' ?></span></p>

                    <?php if (!empty($biere["type"])): ?>
                        <p class="biere-type">Type : <span><?= htmlspecialchars((string)$biere["type"]) ?></span></p>
                    <?php endif; ?>

                    <p class="biere-desc"><?= !empty($biere["description"]) ? htmlspecialchars((string)$biere["description"]) : 'Pas de description.' ?></p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
</main>
