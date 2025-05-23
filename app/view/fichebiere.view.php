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
        </div>
    </div>
</main>