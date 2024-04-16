<?php require_once('header.php'); ?>
<?php

// Include the database connection file
include 'db.php';

session_start();

$message = ""; // Initialize an empty message variable

if(isset($_POST['submit'])){
    
   // Escape user inputs to prevent SQL injection
   $fullname = mysqli_real_escape_string($conn, $_POST['Full_Name']);
   $date = mysqli_real_escape_string($conn, $_POST["Date_of_Birth"]);
   $genre = mysqli_real_escape_string($conn, $_POST["Gender"]);
   $addr = mysqli_real_escape_string($conn, $_POST["Adress"]);
   $gmail = mysqli_real_escape_string($conn, $_POST["Email"]);
   $nbr_phone = mysqli_real_escape_string($conn, $_POST["Phone_Number"]);
   $maladie = mysqli_real_escape_string($conn, $_POST["having_disease"]);
   
   // Check if the user already exists
   $select_query = "SELECT * FROM patient WHERE email='$gmail'";
   $result = mysqli_query($conn, $select_query);
   if(mysqli_num_rows($result) > 0){
      $message = "This email already exists";
   } else {
      // Insert user data into the database
      $insert_query = "INSERT INTO patient (fname, dateofbirth, gender, adress, email, phonenumber, disease) VALUES ('$fullname','$date','$genre','$addr','$gmail','$nbr_phone','$maladie')";
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
    <title>Patient Registration</title>
    <link rel="stylesheet" href="patient11.css">
</head>
<body>
    <section class="Home">
        <div class="patient">
            <h1 class="un"><span>Patient</span> Registration 📝</h1>
            <br><br><br>
            <div class="paragraph-container"> 
                <form  method="post">
                    <?php if(!empty($message)): ?>
                         <p class="<?= $insert_result ? 'success' : 'error' ?>"><?php echo $message; ?></p>
                    <?php endif; ?><br><br>
        
                    <label for="Full_Name">Full Name</label>
                    <input type="text" name="Full_Name" placeholder="Full Name" required><br>
                    <label for="Date_of_Birth">Date of Birth</label>
                    <input type="date" name="Date_of_Birth" placeholder="Date of Birth" required><br>
                    <label for="Gender">Gender</label>
                    <input type="text" name="Gender" placeholder="Gender" required><br>
                    <label for="Adress">Address</label>
                    <input type="text" name="Adress" placeholder="Address" required><br>
                    <label for="Email">Email</label>
                    <input type="email" name="Email" placeholder="Email" required><br>
                    <label for="Phone_Number">Phone Number</label>
                    <input type="text" name="Phone_Number" placeholder="Phone Number" required><br>
                    <label for="having_disease">Do you have a disease?</label>
                    <input type="text" name="having_disease" placeholder="Yes/No"><br>
                    <button type="submit" name="submit">Register</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

<?php require_once('footer.php'); ?>
