<?php

@include 'db.php';

session_start();

if(isset($_POST['submit'])){
    
   $uname = mysqli_real_escape_string($conn, $_POST['User_name']);
   $email = mysqli_real_escape_string($conn,$_POST["Email"] );
   $nbr_phone = mysqli_real_escape_string($conn, $_POST["Number_phone"]);
   $pass = mysqli_real_escape_string($conn, $_POST["password"]);
   

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }
      

}

?>
