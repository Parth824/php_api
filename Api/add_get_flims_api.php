<?php

    header("Access-Control-Allow-Methods: POST GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->add_flims_data($_POST['Flims_Types']);
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
       $api->fetch_flims_data();
    }

    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>