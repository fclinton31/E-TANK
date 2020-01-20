<?php
   //opening connection
     require_once 'inc.php';
     $cartObj=json_decode(file_get_contents("php://input"));

     if (count($cartObj)>0){

             $userId=mysqli_real_escape_string($connect, $cartObj->idNo);
             $tankId=mysqli_real_escape_string($connect, $cartObj->tid);
             $Details=mysqli_real_escape_string($connect, $cartObj->details);
              $errors = array();        
              $user_sel= "INSERT INTO Transaction(userId,tankId,Details)
                          VALUES('$userId','$tankId','$Details')";
              
              $run_query = mysqli_query($connect,$user_sel);
              if (mysqli_query($connect,$user_sel)) {
                $d=1;
              }

     }   
           
  // print  json_encode($d); 
?>