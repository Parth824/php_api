<?php

        class Config{
          private  $SERVERNAME = "localhost";
          private  $DATABASENAME = "rate";
          private  $USERNAME = "root";
          private  $PASSWORD = "";
          public $conn;
          private $DOCTOR = "doctor";
          private $EMPLOYEE = "employee";
          private $ORDER_TABLE = "order_table";
          private $PRODUCT = "product";
          private $COMPLAIN = "complain";
          private $ATTENDANCE = "attendance";
          private $EXPENSE = "expense";
          private $FLIMS = "flims";
          private $INK = "ink";
          private $JELLY = "jelly";
          private $BANK_ACCOUNT = "bank_account";

            public Function Connection(){
                $this->conn =  @mysqli_connect($this->SERVERNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASENAME);
                
                return $this->conn;
            }

            public Function Doctor_Insert($Hospital_Name,$First_Name,$Last_Name,$Phone_Number,$Address,$Email,$Password,$Paper_Size,$Paper_Price){
                $this->Connection();

                $q = "INSERT into $this->DOCTOR(Hospital_Name,First_Name,Last_Name,Phone_Number,Address,Email,Password,Paper_Size,Paper_Price) values('$Hospital_Name','$First_Name','$Last_Name','$Phone_Number','$Address','$Email','$Password','$Paper_Size','$Paper_Price')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Doctor_Selete(){
                $this->Connection();
                $q = "Select * from $this->DOCTOR";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Doctor_Update_Paper_Size($D_Id,$Paper_Size)
            {
                $this->Connection();
                $q = "Update $this->DOCTOR set Paper_Size = '$Paper_Size' where D_Id = $D_Id";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
          
            public Function Doctor_Update_Paper_Price($D_Id,$Paper_Price)
            {
                $this->Connection();
                $q = "Update $this->DOCTOR set Paper_Price = '$Paper_Price' where D_Id = $D_Id";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
            public Function Doctor_lenght(){
                $this->Connection();
                $q = "Select COUNT(*)as Total_Doctor from $this->DOCTOR";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
            public Function Employee_lenght(){
                $this->Connection();
                $q = "Select COUNT(*)as Total_Employee from $this->EMPLOYEE";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
            public Function Sales_lenght(){
                $this->Connection();
                $q = "Select COUNT(*)as Total_Sales from $this->ORDER_TABLE";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
            public Function Employee_Insert($First_Name,$Last_Name,$Phone_Number,$Address,$Email,$Password,$Salary){
                $this->Connection();
                $q = "INSERT into $this->EMPLOYEE(First_Name,Last_Name,Phone_Number,Address,Email,Password,Salary) values('$First_Name','$Last_Name','$Phone_Number','$Address','$Email','$Password','$Salary')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Employee_Selete(){
                $this->Connection();
                $q = "Select * from $this->EMPLOYEE";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Employee_Update_Salary($E_Id,$Salary)
            {
                $this->Connection();
                $q = "Update $this->EMPLOYEE set Salary = '$Salary' where E_Id = $E_Id";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Product_Insert($Name,$Paper_Photo,$Paper_Size,$J_Id,$I_Id,$F_Id,$Price){
                $this->Connection();

                $q = "INSERT into $this->PRODUCT(Name,Paper_Photo,Paper_Size,J_Id,I_Id,F_Id,Price) values('$Name','$Paper_Photo','$Paper_Size',$J_Id,$I_Id,$F_Id,'$Price')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Complain_Insert($D_Id,$E_Id,$Printer_Name,$Image,$Description,$Nozel_Check){
                $this->Connection();

                $q = "INSERT into $this->COMPLAIN(D_Id,E_Id,Printer_Name,Image,Description,Nozel_Check) values($D_Id,$E_Id,'$Printer_Name','$Image','$Description','$Nozel_Check')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Product_Select(){
                $this->Connection();
                $q = "Select * from $this->PRODUCT";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Complain_Select(){
                $this->Connection();
                $q = "Select * from $this->COMPLAIN";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Attendance_Insert($E_Id,$Emp_Date,$P_A){
                $this->Connection();

                $q = "INSERT into $this->ATTENDANCE(E_Id,Emp_Date,P_A) values($E_Id,'$Emp_Date','$P_A')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Attendance_Select(){
                $this->Connection();
                $q = "Select * from $this->ATTENDANCE";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Attendance_Update_P_A($A_Id,$E_Id,$P_A)
            {
                $this->Connection();
                $q = "Update $this->ATTENDANCE set P_A = '$P_A' where E_Id = $E_Id and A_Id = $A_Id";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Expense_Insert($E_Id,$Bill_Image,$Name,$Dect,$Categary,$Amount,$Ex_Date){
                $this->Connection();

                $q = "INSERT into $this->EXPENSE(E_Id,Bill_Image,Name,Dect,Categary,Amount,Ex_Date) values($E_Id,'$Bill_Image','$Name','$Dect','$Categary','$Amount','$Ex_Date')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Expense_Select(){
                $this->Connection();
                $q = "Select * from $this->EXPENSE";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Flims_Insert($Flims_Types){
                $this->Connection();

                $q = "INSERT into $this->FLIMS(Flims_Types) values('$Flims_Types')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
            public Function Flims_Select(){
                $this->Connection();
                $q = "Select * from $this->FLIMS";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Ink_Insert($Ink_Types){
                $this->Connection();

                $q = "INSERT into $this->INK(Ink_Types) values('$Ink_Types')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Ink_Select(){
                $this->Connection();
                $q = "Select * from $this->INK";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Jelly_Insert($Jelly_Types){
                $this->Connection();

                $q = "INSERT into $this->JELLY(Jelly_Types) values('$Jelly_Types')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
            
            public Function Jelly_Select(){
                $this->Connection();

                $q = "Select * from $this->JELLY";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Order_Table_Insert($Printer_Name,$Paper_Quty,$I_Id,$J_Id,$F_Id,$Payment_Transfer_Name,$Payment_Type,$Order_Received,$D_Id){
                $this->Connection();
                $q = "INSERT into $this->ORDER_TABLE(Printer_Name,Paper_Quty,I_Id,J_Id,F_Id,Payment_Transfer_Name,Payment_Type,Order_Received,D_Id) values('$Printer_Name','$Paper_Quty',$I_Id,$J_Id,$F_Id,'$Payment_Transfer_Name','$Payment_Type','$Order_Received',$D_Id)";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Order_table_Select(){
                $this->Connection();
                $q = "Select * from $this->ORDER_TABLE";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Order_Table_Update_Emp($E_Id,$O_Id)
            {
                $this->Connection();
                $q = "Update $this->ORDER_TABLE set E_Id = $E_Id where O_Id = $O_Id";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Order_Table_Update_Nozel($Nozel_Check,$O_Id)
            {
                $this->Connection();
                $q = "Update $this->ORDER_TABLE set Nozel_Check = '$Nozel_Check' where O_Id = $O_Id";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Bank_Account_Insert($Bank_Name,$Type,$Opening_Price){
                $this->Connection();
                $q = "INSERT into $this->BANK_ACCOUNT(Bank_Name,Type,Opening_Price) values('$Bank_Name','$Type','$Opening_Price')";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }

            public Function Bank_Account_Select(){
                $this->Connection();
                $q = "Select * from $this->BANK_ACCOUNT";
                $res = mysqli_query($this->conn,$q);
                return $res;
            }
        }
?>