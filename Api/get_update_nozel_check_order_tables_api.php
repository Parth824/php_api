
<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $o_id = $_POST['O_Id'];
        $nozel_check =$_FILES['Nozel_Check'];
        
            $fillename = $nozel_check['name'];
            $temp_path = $nozel_check['tmp_name'];
    
            $uid = uniqid();
    
            $image_name = $uid . "-". $fillename;
            $dec_path = "../uploads/" . $image_name;
    
            $isfile=  move_uploaded_file($temp_path,$dec_path);
        

           if($nozel_check)
           {
            $api->nozel_order_data($o_id,$image_name);
           }
           else{
            echo json_encode(['result'=>'Image Not Found....']);
           }
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $api->fetch_order_table_data();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>