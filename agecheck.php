<?php
// Si déjà validé, on redirige directement vers index.php
if (isset($_COOKIE['age_verified'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Vérification d'âge</title>
  <style>
    body { text-align: center; padding-top: 100px; font-family: Arial; background: #f4f4f4; }
    .card {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      display: inline-block;
    }
    button {
      margin: 10px;
      padding: 15px 30px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .yes { background: green; color: white; }
    .no { background: red; color: white; }
  </style>
</head>
<body>

  <div class="card">
    <h1>Avez-vous plus de 18 ans ?</h1>
    <button class="yes" onclick="acceptAge()">Oui</button>
    <button class="no" onclick="denyAge()">Non</button>
  </div>

  <script>
    function acceptAge() {
      // Mettre le cookie et attendre un peu avant de rediriger pour s'assurer qu'il est pris en compte
      document.cookie = "age_verified=true; path=/;";
      setTimeout(() => {
        window.location.href = "index.php";
      }, 500);
    }

    function denyAge() {
      alert("Désolé, vous ne pouvez pas accéder au site.");
    }
  </script>

</body>
</html>
