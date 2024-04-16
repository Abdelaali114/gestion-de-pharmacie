<?php

// Include the database connection file
include 'db.php';

session_start();

$message = ""; // Initialize an empty message variable

if(isset($_POST['submit'])){
    
   // Escape user inputs to prevent SQL injection
   $uname = mysqli_real_escape_string($conn, $_POST['User_name']);
   $email = mysqli_real_escape_string($conn, $_POST["Email"]);
   $nbr_phone = mysqli_real_escape_string($conn, $_POST["Number_phone"]);
   $pass = mysqli_real_escape_string($conn, $_POST["password"]);

   // Check if the user already exists
   $select_query = "SELECT * FROM admins WHERE username='$uname'";
   $result = mysqli_query($conn, $select_query);
   if(mysqli_num_rows($result) > 0){
      $message = "User already exists";
   } else {
      // Insert user data into the database
      $insert_query = "INSERT INTO admins (username, email, phonenumber, motdepass) VALUES ('$uname', '$email', '$nbr_phone', '$pass')";
      $insert_result = mysqli_query($conn, $insert_query);

      if($insert_result) {
         // Set success message if registration is successful
         $message = "Registration successful";
      } else {
         // Set error message if registration fails
         $message = "Registration failed. Please enter valid information.";
      }
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style222.css">
</head>


<body>
    <form method="post">
        <h1>SIGN UP</h1>
        
        <!-- Display message -->
        <?php if(!empty($message)): ?>
            <p class="<?= $insert_result ? 'success' : 'error' ?>"><?php echo $message; ?></p>
        <?php endif; ?>
        
        <label for="User_name">User_name</label>
        <input type="text" name="User_name" placeholder="User_name" required> <br>
        <label for="Email">Email</label>
        <input type="text" name="Email" placeholder="Email" required> <br>
        <label for="Number_phone">Number_phone</label>
        <input type="text" name="Number_phone" placeholder="Number_phone" required> <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password" required> <br>
        <button type="submit" name="submit">Sign up</button> 
    </form>
</body>
</html>
