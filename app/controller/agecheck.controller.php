<?php

function showAgeCheckPage() {
    include 'app/view/agecheck.view.php';
}

function validateAgeCheck() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['confirm_age']) && $_POST['confirm_age'] === 'yes') {
           
            header('Location: index.php');
            exit;
        } else {
            // Redirection si utilisateur refuse
            header('Location: https://www.google.com'); 
            exit;
        }
    }
}
