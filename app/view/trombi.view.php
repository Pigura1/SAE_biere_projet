<main class="trombi">
  <h1>Trombinoscope</h1>
  <form>
    <input type="hidden" name="route" value="search" />
    <input
      type="text"
      name="search"
      id="search"
      class="search"
      placeholder="Nom ou Prénom" />
    <input type="submit" value="Rechercher" name="submit" />
  </form>
  <div class="line-decoration" aria-hidden="true">
    <div class="line" id="line1"></div>
    <div class="line" id="line2"></div>
  </div>
  <div class="trombi-decoration" aria-hidden="true">
    <img src="public/images/dots.svg" id="dots1" alt="" />
    <img src="public/images/dots.svg" id="dots2" alt="" />
  </div>
  <div class="student-cards">
    <?php foreach ($equipe as $student): ?>
      <div class="student-card">
        <a href="?route=fiche&id=<?php echo $student["id_equipe"] ?>">
          <figure class="photo">
            <img src="public/images/small/<?php echo $student['Images'] ?>" alt="photo de <?php echo $student['Prenom']; ?>" />
          </figure>
          <div class="card-infos">
            <p class="name"><?php echo $student["Prenom"] ?> <span><?php echo $student["Nom"] ?></span></p>
            <p class="birthdate"><?php echo str_replace("-", "/", $student["Age"]) ?></p>
            <p class="group">groupe <span><?php echo $student["Groupe"] ?></span></p>
            <p class="role"><span><?php echo $student["Role"]?></span>
            <p class="desc">
              <?php echo $student["Description"] ?>
            </p>
          </div>
        </a>
      </div>
        <?php endforeach ?>
        <nav class="pagination">
    <ul>
      <li class="prev"><a href="/?route=trombinoscope&page=<?php echo $data["page"] - 1 ?>">Préc.</a></li>
      <?php for ($i = 1; $i <= $data['pageAmount']; $i++): ?>
        <li class="<?php echo ($data['page'] == $i) ? 'current' : ''; ?>">
          <?php if ($data['page'] != $i) {
            echo "<a href='/?route=trombinoscope&page=$i'>$i</a>";
          } else {
            echo $i;
          }
          ?>
        </li>
      <?php endfor ?>
      <li class="next"><a href="/?route=trombinoscope&page=<?php echo $data["page"] + 1 ?>">Suiv.</a></li>
    </ul>
  </nav>
    
  </main>