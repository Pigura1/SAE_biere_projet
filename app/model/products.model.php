 <?php
require_once 'app/model/model.php';

function getAllBieres() : array {
    

    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM articles");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getBiereById(int $id): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM articles WHERE id_articles=:id_articles");
    $stmt->bindParam(':id_articles', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

?>

