<main class = trombi>
      <h1>Trombinoscope</h1>
      <div class="line-decoration" aria-hidden="true">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
      </div>
      <div class="trombi-decoration" aria-hidden="true">
        <img src="images/dots.svg" id="dots1" alt="" />
        <img src="images/dots.svg" id="dots2" alt="" />
      </div>

      <div class="student-cards">
      <?php foreach ($students as $student) : ?>
        <div class="student-card">
          <a href="fiche.html">
          <figure class="photo">
              <?php
              if (empty($student['photo'])){
                $photo = 'default.png';
              } else {
                $photo = 'small/' . $student['photo'];
              }
              ?>

              <img src="public/images/<?= $photo ?>" alt="photo de <? $student['Prenom'] ?> <?= $student['nom'] ?>" />
            </figure>

            <div class="card-infos">
              <p class="name">Aimé <span>Mihi</span></p>
              <p class="birthdate">12/02/2001</p>
              <p class="group">groupe <span>12</span></p>
              <p class="desc">
                Je suis un brillant élève de l'IUT Sénart Fontainebleau. Je suis
                passionné par le WEB et la création numérique
              </p>
            </div>
          </a>
        </div> 
        <?php endforeach ?>
  </main>