<?php

require_once 'app/controller/controller.php';
require_once'app/model/trombi.model.php';


function generateTrombinoscopePage() {
    $data = [ 
        'students' => getAllStudents(),
        'page_title' => "Trombinoscope", 
        'view' => 'app/view/trombinoscope.view.php', 
        'layout' => 'app/view/common/layout.php', 
    ]; 
    generatePage($data);
}

function generateStudentPage() {

    $id = $_GET['id']; //TODO: pas sécurisé 

    $data = [ 
        'student' => getStudent($id),
        'page_title' => "Trombinoscope", 
        'view' => 'app/view/student.view.php', 
        'layout' => 'app/view/common/layout.php', 
    ]; 
    generatePage($data);
}

?>