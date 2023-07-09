<?php

    header("Access-Control-Allow-Methods: POST GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->add_bank_account_data($_POST['Bank_Name'],$_POST['Type'],$_POST['Opening_Price']);
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
       $api->fetch_bank_account_data();
    }

    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>