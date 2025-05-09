<?php

require_once 'app/model/model.php';

function getAllStudents(): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM equipe");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getStudentById(int $id): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM equipe WHERE id=:id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

function getMaxStudentId()
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT id FROM equipe ORDER BY id DESC LIMIT 1");
    $stmt->execute();
    return $stmt->fetch()["id"];
}

function getNextStudentsPage(int $page): array
{
    $offset = ($page - 1) * 12;
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM equipe LIMIT 12 OFFSET :offset");
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getStudentsAmount(): int
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT count(*) as total FROM equipe");
    $stmt->execute();
    $result = $stmt->fetch();
    return (int) $result['total'];
}

function getPageAmount(): int
{
    return ceil(getStudentsAmount() / 12);
}