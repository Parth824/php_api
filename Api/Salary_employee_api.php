<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->Salary_employee_data($_POST['E_Id'],$_POST['Salary']);
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>