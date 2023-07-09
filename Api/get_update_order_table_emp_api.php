
<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $o_id = $_POST['O_Id'];
        $e_id = $_POST['E_Id'];
        
        $api->emp_order_data($o_id,$e_id);
           
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $api->fetch_order_table_data();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>