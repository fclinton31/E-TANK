
<?Php      
   //opening connection
     require_once 'inc.php';
                   
    $data=json_decode(file_get_contents("php://input"));
    if (count($data)>0){

               $Name =mysqli_real_escape_string($connect, $data->Name );
               $Liters =mysqli_real_escape_string($connect, $data->Liters);
               $AmountPerLiter =mysqli_real_escape_string($connect, $data->AmountPerLiter);

               $user_sel= "UPDATE `tank` SET Liters  ='$Liters',AmountPerLiter  ='$AmountPerLiter' where Name  ='$Name'";
               if($run_query = mysqli_query($connect,$user_sel)){
                   $data=3;
               }; 
    }
          
mysqli_close($connect)
   
?>