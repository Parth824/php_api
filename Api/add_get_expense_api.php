
<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['Name'];
        $bill_image = $_FILES['Bill_Image'];
        $dect = $_POST['Dect'];
        $categary = $_POST['Categary'] ;
        $amount = $_POST['Amount'];
        $ex_date = $_POST['Ex_Date'];
        $e_id = $_POST['E_Id'];

        $fillename = $bill_image['name'];
        $temp_path = $bill_image['tmp_name'];

        $uid = uniqid();

        $image_name = $uid . "-". $fillename;
        $dec_path = "../uploads/" . $image_name;

        $isfile=  move_uploaded_file($temp_path,$dec_path);

       if($isfile)
       {
            $api->add_expense_data($e_id,$image_name,$name,$dect,$categary,$amount,$ex_date);
       }else{
        echo json_encode(['result'=>'This Image Not Found....']);
       }
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $api->fetch_expense_data();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>