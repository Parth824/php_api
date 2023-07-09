
<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: appilcation/json");

    
    include('api.php');

    $api = new Api();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['Name'];
        $paper_photo = $_FILES['Paper_Photo'];
        $paper_size = $_POST['Paper_Size'];
        $j_id = $_POST['J_Id'] ;
        $i_id = $_POST['I_Id'];
        $f_id = $_POST['F_Id'];
        $price = $_POST['Price'];

        $fillename = $paper_photo['name'];
        $temp_path = $paper_photo['tmp_name'];

        $uid = uniqid();

        $image_name = $uid . "-". $fillename;
        $dec_path = "../uploads/" . $image_name;

        $isfile=  move_uploaded_file($temp_path,$dec_path);

       if($isfile)
       {
            $api->add_product_data($name,$image_name,$paper_size,$j_id,$i_id,$f_id,$price);
       }else{
        echo json_encode(['result'=>'This Image Not Found....']);
       }
    }
    else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $api->fetch_product_data();
    }
    else{
        echo json_encode(['result'=>'This Method Not....']);
    }

?>