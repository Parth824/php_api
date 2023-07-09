<?php

    header("Access-Control-Allow-Methods: POST GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->add_employee_data($_POST['First_Name'],$_POST['Last_Name'],$_POST['Phone_Number'],$_POST['Address'],$_POST['Email'],$_POST['Password'],$_POST['Salary']);
    }else if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
       $api->fetch_employee_data();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }
    
?>