 <h1>Nos Bières</h1>

    <?php foreach ($bieres as $biere): ?>
        <div class="biere">
            <h2><?= $biere['nom'] ?></h2>
            <p class="prix">Prix : <?= $biere['prix'] ?></p>
            <p><?= $biere['description'] ?></p>
        </div>
    <?php endforeach; ?>


   
