<?php
    $to = "abdellaalimohamad4321@gmail.com";
    $subject = "Products Stock";
    $message = "Here is the list of products with quantity less than 5:\n";

    $con = new mysqli("localhost", "root", "", "pharmaceutique");
    $reponse= $con->query('SELECT * FROM produits WHERE quantityonhand < 5 ');

    while($donnees = mysqli_fetch_array($reponse)) {
        $message .= "Product name: " . $donnees['productname'] . "\n";
        $message .= "Date Of Expiration: " . $donnees['expirationdate'] . "\n";
        $message .= "Description: " . $donnees['descrip'] . "\n";
        $message .= "Quantity on hand: " . $donnees['quantityonhand'] . "\n";
        $message .= "Added at: " . $donnees['addingdate'] . "\n\n";
    }

    $headers = "From: abdellaali2550@gmail.com" . "\r\n" .
               "Reply-To: abdellaalimohamad4321@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
   
    
    echo "<script>alert('Email sent successfully!');</script>";
?>

