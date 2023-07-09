<?php

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
       $api->total_No_Of_all();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>