<?php require_once('header.php')
?>
<?php

// Include the database connection file
include 'db.php';

session_start();

$message = ""; // Initialize an empty message variable

if(isset($_POST['submit'])){
    
   // Escape user inputs to prevent SQL injection
   $proname = mysqli_real_escape_string($conn, $_POST['product-name']);
   $date = mysqli_real_escape_string($conn, $_POST["expiration-date"]);
   $descr = mysqli_real_escape_string($conn, $_POST["description"]);
   $quantity = mysqli_real_escape_string($conn, $_POST["quantity_on_hand"]);
   $add= mysqli_real_escape_string($conn, $_POST["addingdate"]);
   
   // insert product into db
   $select_query = "SELECT * FROM produits WHERE productname = '$proname'";
   $result = mysqli_query($conn, $select_query);
   if(mysqli_num_rows($result) > 0){
      $message = "This product already exists";
   } else {
      // Insert user data into the database
      $insert_query = "INSERT INTO produits (productname, expirationdate, descrip, quantityonhand ,addingdate) VALUES ('$proname', '$date', '$descr', '$quantity','$add')";
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
    <title>Document</title>
    <link rel="stylesheet" href="Addprod112.css">
</head>
<body>

    <div class="title"><br>
    <h1><span>PRODUCTS</span> DETAILS</h1><br>
    </div>
    
        
        <form method="post">
            <?php if(!empty($message)): ?>
                         <p class="<?= $insert_result ? 'success' : 'error' ?>"><?php echo $message; ?></p>
                    <?php endif; ?><br>
            <label for="product-name">Product Name</label>
            <input type="text" id="product-name" name="product-name">
            <label for="expiration-date">Expiration Date</label>
            <input type="date" id="expiration-date" name="expiration-date">
            <label class="inputdes" for="description">description</label>
            <input type="text" id="description" name="description">
            <label for="quantity_on_hand">Quantity on hand</label>
            <input type="number" id="number" name="quantity_on_hand">
            <label for="addingdate">Added at</label>
            <input type="date" id="addingdate" name="addingdate">
            <button type="submit" name="submit">ADD</button>

        </form>
    
</body>
</html><br><br><br><br>
<?php require_once('footer.php')
?>


