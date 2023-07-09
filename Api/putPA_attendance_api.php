<?php

    header("Access-Control-Allow-Methods: POST GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->p_a_attendance_data($_POST['A_Id'],$_POST['E_Id'],$_POST['P_A']);
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>