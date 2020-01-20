<?php
   //opening connection
     require_once 'inc.php';

                $user_sel= " SELECT DISTINCT cust.FirstName,cust.Surname,cart.Details,cart.dateadded
                              FROM Transaction cart 
                              inner join customer cust on  cust.idNumber = cart.userId";

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