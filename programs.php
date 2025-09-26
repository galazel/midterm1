<?php 
    include 'class.php';
    $data = file_get_contents('php://input'); 
    $programs = json_decode($data, true);   
    $department = new Department($programs);
    $programs = $department->getPrograms();
?>