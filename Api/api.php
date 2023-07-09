<?php

    include('../Config/config.php');

    class Api{

        public function add_doctor_data($Hospital_Name,$First_Name,$Last_Name,$Phone_Number,$Address,$Email,$Password,$Paper_Size,$Paper_Price){
          $config =  new Config();

          $res = $config->Doctor_Insert($Hospital_Name,$First_Name,$Last_Name,$Phone_Number,$Address,$Email,$Password,$Paper_Size,$Paper_Price);
        
          if($res)
          {
            echo json_encode(['result' => "insertion successfuly"]);
          }
          else
          {
            echo json_encode(['result'=>'insertion failed']);
          }
        }

        public function fetch_doctor_data()
        {
            $config = new Config();

            $res = $config->Doctor_Selete();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
        }

        public function putSize_doctor_data($D_Id,$Paper_Size){
            $config =  new Config();
  
            $res = $config->Doctor_Update_Paper_Size($D_Id,$Paper_Size);
          
            if($res)
            {
              echo json_encode(['result' => "Updatetion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'Updatetion failed']);
            }
          }

          public function putPrice_doctor_data($D_Id,$Paper_Price){
            $config =  new Config();
  
            $res = $config->Doctor_Update_Paper_Price($D_Id,$Paper_Price);
          
            if($res)
            {
              echo json_encode(['result' => "Updatetion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'Updatetion failed']);
            }
          }

          public function total_No_Of_all()
          {
            $config =  new Config();

            $res1  = $config->Doctor_lenght();
            $res2 = $config->Employee_lenght();
            $res3 = $config->Sales_lenght();

            $len = array(mysqli_fetch_assoc($res1),mysqli_fetch_assoc($res2),mysqli_fetch_assoc($res3) );

            if($res1 && $res2 && $res3)
            {
              echo json_encode($len);
            }
            else
            {
              echo json_encode(['result'=>'failed.....']);
            }
          }

          public function add_employee_data($First_Name,$Last_Name,$Phone_Number,$Address,$Email,$Password,$Salary)
          {
            $config =  new Config();

            $res = $config->Employee_Insert($First_Name,$Last_Name,$Phone_Number,$Address,$Email,$Password,$Salary);
        
            if($res)
            {
                echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
                echo json_encode(['result'=>'insertion failed']);
            }
          }

          public function fetch_employee_data()
          {
            $config = new Config();

            $res = $config->Employee_Selete();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          }

          public function Salary_employee_data($E_Id,$Salary){
            $config =  new Config();
  
            $res = $config->Employee_Update_Salary($E_Id,$Salary);
          
            if($res)
            {
              echo json_encode(['result' => "Updatetion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'Updatetion failed']);
            }
          }

          public function add_product_data($Name,$Paper_Photo,$Paper_Size,$J_Id,$I_Id,$F_Id,$Price){
            $config =  new Config();
  
            $res = $config->Product_Insert($Name,$Paper_Photo,$Paper_Size,$J_Id,$I_Id,$F_Id,$Price);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function add_complain_data($D_Id,$E_Id,$Printer_Name,$Image,$Description,$Nozel_Check){
            $config =  new Config();
  
            $res = $config->Complain_Insert($D_Id,$E_Id,$Printer_Name,$Image,$Description,$Nozel_Check);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function fetch_product_data()
          {
            $config = new Config();

            $res = $config->Product_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function fetch_complain_data()
          {
            $config = new Config();

            $res = $config->Complain_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function add_attendance_data($E_Id,$Emp_Date,$P_A){
            $config =  new Config();
  
            $res = $config->Attendance_Insert($E_Id,$Emp_Date,$P_A);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function fetch_attendance_data()
          {
            $config = new Config();

            $res = $config->Attendance_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function p_a_attendance_data($A_Id,$E_Id,$P_A){
            $config =  new Config();
  
            $res = $config->Attendance_Update_P_A($A_Id,$E_Id,$P_A);
          
            if($res)
            {
              echo json_encode(['result' => "Updatetion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'Updatetion failed']);
            }
          }

          public function add_expense_data($E_Id,$Bill_Image,$Name,$Dect,$Categary,$Amount,$Ex_Date){
            $config =  new Config();
  
            $res = $config->Expense_Insert($E_Id,$Bill_Image,$Name,$Dect,$Categary,$Amount,$Ex_Date);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function fetch_expense_data()
          {
            $config = new Config();

            $res = $config->Expense_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function add_flims_data($Flims_Types){
            $config =  new Config();
  
            $res = $config->Flims_Insert($Flims_Types);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function fetch_flims_data()
          {
            $config = new Config();

            $res = $config->Flims_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function add_ink_data($Ink_Types){
            $config =  new Config();
  
            $res = $config->Ink_Insert($Ink_Types);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function fetch_ink_data()
          {
            $config = new Config();

            $res = $config->Ink_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function add_jelly_data($Jelly_Types){
            $config =  new Config();
  
            $res = $config->Jelly_Insert($Jelly_Types);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function fetch_jelly_data()
          {
            $config = new Config();

            $res = $config->Jelly_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function add_order_table_data($Printer_Name,$Paper_Quty,$I_Id,$J_Id,$F_Id,$Payment_Transfer_Name,$Payment_Type,$Order_Received,$D_Id){
            $config =  new Config();
  
            $res = $config->Order_Table_Insert($Printer_Name,$Paper_Quty,$I_Id,$J_Id,$F_Id,$Payment_Transfer_Name,$Payment_Type,$Order_Received,$D_Id);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          

          public function fetch_order_table_data()
          {
            $config = new Config();

            $res = $config->Order_table_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 

          public function emp_order_data($O_Id,$E_Id){
            $config =  new Config();
  
            $res = $config->Order_Table_Update_Emp($E_Id,$O_Id);
          
            if($res)
            {
              echo json_encode(['result' => "Updatetion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'Updatetion failed']);
            }
          }

          public function nozel_order_data($O_Id,$Nozel_Check){
            $config =  new Config();
  
            $res = $config->Order_Table_Update_Nozel($Nozel_Check,$O_Id);
          
            if($res)
            {
              echo json_encode(['result' => "Updatetion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'Updatetion failed']);
            }
          }

          public function add_bank_account_data($Bank_Name,$Type,$Opening_Price){
            $config =  new Config();
  
            $res = $config->Bank_Account_Insert($Bank_Name,$Type,$Opening_Price);
          
            if($res)
            {
              echo json_encode(['result' => "insertion successfuly"]);
            }
            else
            {
              echo json_encode(['result'=>'insertion failed']);
            }
          } 

          public function fetch_bank_account_data()
          {
            $config = new Config();

            $res = $config->Bank_Account_Select();
            $arry = [];
            if($res)
            {   
                while($data = mysqli_fetch_assoc($res))
                {
                     array_push($arry,$data);
                }
                echo json_encode($arry);
            }
            else
            {
                echo json_encode(['result' => 'selection failed']);
            }
          } 
    }
?>