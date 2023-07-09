<?php

    header("Access-Control-Allow-Methods: POST GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $api->add_attendance_data($_POST['E_Id'],$_POST['Emp_Date'],$_POST['P_A']);
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
       $api->fetch_attendance_data();
    }

    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>