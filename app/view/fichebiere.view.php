<main class="listebiere">
    <h1><?php echo $data["fichebiere"]["Nom"] ?></h1>
    <div class="biereimg">
        <figure class="photobiere">
            <img src="public/images/big/<?php echo $data["fichebiere"]["Images"] ?>" alt="photo de <?php echo $data["fichebiere"]["Nom"] ?>" />
        </figure>
        <div class="bierefiche-infos">
            <div class="data">
                <p class="group">Les ingrédients sont <?php echo $data["fichebiere"]["Ingredients"] ?></p>
            </div>
            <p class="desc">
                <?php echo $data["fichebiere"]["Description"] ?>
            </p>
            <form method="POST" action="ajout_biere.php">
    <input type="hidden" name="id_articles" value="<?= $fichebiere['id_articles'] ?>">
    <label for="quantite_<?= $biere['id_articles'] ?>">Quantité :</label>
    <input type="number" name="quantite" id="quantite_<?= $fichebiere['id_articles'] ?>" value="1" min="1" required>
    <button type="submit">Ajouter au panier</button>
</form>
        </div>
    </div>
</main>