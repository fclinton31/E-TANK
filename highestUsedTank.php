<?php
   //opening connection
     require_once 'inc.php';

                $user_sel= " SELECT Count(shop.tankId) as 'howmany',shop.tankId,t.Name
                                FROM `Transaction` shop
                                 INNER JOIN `tank` t on t.Id=shop.tankId
                                   GROUP by shop.tankId,t.Name";

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