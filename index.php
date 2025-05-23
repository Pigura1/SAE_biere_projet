<?php


// --- Ton code de routeur habituel ---

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
    case 'produit':
        require_once 'app/controller/products.controller.php';
        generateProductPage();
        break;
    case 'contact':
        require_once 'app/controller/contact.controller.php';
        generateContactPage();
        break;
    case 'search':
        require_once 'app/controller/recherche.controller.php';
        generateSearchPage();
        break;
    case 'student':
        require_once 'app/controller/trombi.controller.php';
        generateStudentPage();
        break;
    case 'compte':
        require_once 'app/controller/compte.controller.php';
        generateComptePage();
        break;
    case 'fiche':
        require_once 'app/controller/fiche.controller.php';
        generateFichePage();
        break;
    case 'fichebiere':
        require_once 'app/controller/fichebiere.controller.php';
        generateFichebierePage();
        break;
    case 'achat':
        require_once 'app/controller/achat.controller.php';
        generateAchatPage();
        break;
    default:
        exit;
}
?>
