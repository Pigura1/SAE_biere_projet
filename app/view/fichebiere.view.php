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

            <!-- Formulaire d'ajout au panier -->
          <form action="achat.view.php" method="GET" class="form-panier">
    <input type="hidden" name="biere" value="<?php echo $data["fichebiere"]["Nom"] ?>">

    <div class="quantite-wrapper">
        <label for="quantite">Quantité :</label>
        <div class="quantite-selector">
            <button type="button" onclick="changerQuantite(-1)">-</button>
            <input type="number" name="quantite" id="quantite" value="1" min="1">
            <button type="button" onclick="changerQuantite(1)">+</button>
        </div>
    </div>

<button type="button" class="btn-ajout" onclick="window.location.href='index.php?route=achat'">
  Ajouter au panier
</button>

</form>

            <script>
                function changerQuantite(change) {
                    const input = document.getElementById('quantite');
                    let current = parseInt(input.value);
                    if (!isNaN(current)) {
                        let newValue = current + change;
                        input.value = newValue < 1 ? 1 : newValue;
                    }
                }
            </script>
        </div>
    </div>
</main>
