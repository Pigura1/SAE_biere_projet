<?php
require_once 'app/controller/controller.php';

function generateAjoutPage() {
    $data = [
        'page_title' => "Nous contacter",
        'view' => 'app/view/ajout_biere.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
?>