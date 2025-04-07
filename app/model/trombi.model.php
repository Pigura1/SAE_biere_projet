<?php

function getAllStudents(): array {

    $pdo = getDatabaseConnexion();
    $sql = 'SELECT * FROM students';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getStudent(int $id): array {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM students WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}
