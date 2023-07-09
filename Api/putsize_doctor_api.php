<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->putSize_doctor_data($_POST['D_Id'],$_POST['Paper_Size']);
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>