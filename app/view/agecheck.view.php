<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification d'âge</title>
    <link rel="stylesheet" href="public/css/agecheck.css">
</head>
<body>
    <div class="age-check-container">
        <h1 class="title">Avez-vous plus de 18 ans ?</h1>
        <form action="?route=validate_age" method="POST">
            <div class="button-group">
                <button type="submit" name="confirm_age" value="yes" class="btn btn-yes">Oui</button>
                <button type="submit" name="confirm_age" value="no" class="btn btn-no">Non</button>
            </div>
        </form>
    </div>
</body>
</html>
