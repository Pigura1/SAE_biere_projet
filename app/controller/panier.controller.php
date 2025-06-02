<?php
require_once 'app/model/products.model.php';
require_once 'app/controller/controller.php';

function generatePanierPage() {
    $data = [
        'achat'=>getSpecificBeers($db,$id_articles),
        'page_title' => "Votre panier",
        'view' => 'app/view/panier.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
?>