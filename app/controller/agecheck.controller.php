<?php

function showAgeCheckPage() {
    include 'app/view/agecheck.view.php';
}

function validateAgeCheck() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['confirm_age']) && $_POST['confirm_age'] === 'yes') {
            setcookie('age_verified', '1', [
                'expires' => time() + 3600,
                'path' => '/',
                'secure' => isset($_SERVER['HTTPS']),
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
            header('Location: index.php?route=home');
            exit;
        } else {
            header('Location: https://www.google.com');
            exit;
        }
    }
}
