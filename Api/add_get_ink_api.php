<?php

    header("Access-Control-Allow-Methods: POST GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->add_ink_data($_POST['Ink_Types']);
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
       $api->fetch_ink_data();
    }

    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>