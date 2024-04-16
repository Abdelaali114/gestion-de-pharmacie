<?php

// Include the database connection file
include 'db.php';

session_start();

if(isset($_POST['submit'])){
    
   // Escape user inputs to prevent SQL injection
   $uname = mysqli_real_escape_string($conn, $_POST['uname']);
   $pass = mysqli_real_escape_string($conn, $_POST["password"]);

   // Check if the user exists
   $select_query = "SELECT * FROM admins WHERE username='$uname' AND motdepass='$pass'";
   $result = mysqli_query($conn, $select_query);

   if(mysqli_num_rows($result) == 1){
        // Start a session and store the username
        $_SESSION['username'] = $uname;
        header("Location: login.php");
        exit(); 
    } else {
        header("Location: index.php?error=Incorrect username or password!");
        exit(); 
    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>LOGIN</title>
   <link rel="stylesheet" href="style11.css">
</head>
<body>
    <form method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="uname">User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
