
<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $printer_name = $_POST['Printer_Name'];
        $paper_quty = $_POST['Paper_Quty'];
        $payment_transfer_Name = $_POST['Payment_Transfer_Name'];
        $j_id = $_POST['J_Id'] ;
        $i_id = $_POST['I_Id'];
        $f_id = $_POST['F_Id'];
        $payment_type = $_POST['Payment_Type'];
        $order_received = $_POST['Order_Received'];
        $d_id = $_POST['D_Id'];

            $api->add_order_table_data($printer_name,$paper_quty,$i_id,$j_id,$f_id,$payment_transfer_Name,$payment_type,$order_received,$d_id);
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $api->fetch_order_table_data();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>