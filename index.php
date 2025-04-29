<?php
require_once 'config.php';
require_once 'app/model/model.php';
require_once 'app/controller/accueil.controller.php';

$route = 'home';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}


switch ($route) {
    case 'home':
        require_once 'app/controller/accueil.controller.php';
        generateHomePage();
        break;
    case 'trombinoscope':
        require_once 'app/controller/trombi.controller.php';
        generateTrombinoscopePage();
        break;

    case 'student':
        require_once 'app/controller/trombi.controller.php';
        generateStudentPage();
    default:
        exit;
}