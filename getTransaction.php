<?php
   //opening connection
     require_once 'inc.php';

               $errors = array();
               $cartObj=json_decode(file_get_contents("php://input"));

            $userId=mysqli_real_escape_string($connect, $cartObj->idNo);

                $user_sel= " SELECT DISTINCT(details) as details, DATE_FORMAT(dateadded,'%d-%M-%Y') as dateadded
                              FROM Transaction
                              WHERE userId = $userId";

        $run_query = mysqli_query($connect,$user_sel);
        $check_user = mysqli_num_rows($run_query);

        if($check_user>0)
        {                                
        //header('Content-type: application/json');
           while(  $row=$run_query->fetch_assoc())
           {
           //add to array  
            $d [] =$row;
           }

           }else{

           $d=0;
           }
    
                
           
   print  json_encode($d); 
?>