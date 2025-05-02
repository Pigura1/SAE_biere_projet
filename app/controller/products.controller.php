<?php
require_once 'app/controller/controller.php';

function generateProductPage() {
    $data = [
        'page_title' => "Nos bières",
        'view' => 'app/view/product.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
?>