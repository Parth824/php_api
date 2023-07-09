<?php

    header("Access-Control-Allow-Methods: POST GET");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $d_id = $_POST['D_Id'];
        $e_id = $_POST['E_Id'];
        $printer_name = $_POST['Printer_Name'];
        $image = $_FILES['Image'];
        $description = $_POST['Description'];
        $nozel_check = $_FILES['Nozel_Check'];

        $fillename1 = $image['name'];
        $temp_path1 = $image['tmp_name'];

        $fillename2 = $nozel_check['name'];
        $temp_path2 = $nozel_check['tmp_name'];

        $uid1 = uniqid();
        $uid2 = uniqid();

        $image_name2 = $uid2 . "-" .$fillename2;
        $image_name1 = $uid1 . "-". $fillename1;
        $dec_path1 = "../uploads/" . $image_name1;
        $dec_path2 = "../uploads/" . $image_name2;

        $isfile1 =  move_uploaded_file($temp_path1,$dec_path1);
        $isfile2 =  move_uploaded_file($temp_path2,$dec_path2);

       if($isfile1 && $isfile2)
       {
            $api->add_complain_data($d_id,$e_id,$printer_name,$image_name1,$description,$image_name2);
       }else{
        echo json_encode(['result'=>'This Image Not Found....']);
       }
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $api->fetch_complain_data();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>