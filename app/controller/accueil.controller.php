<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateHomePage() {
    $data = [
        'page_title' => "Cyb3r Heaven",
        'view' => 'app/view/accueil.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
