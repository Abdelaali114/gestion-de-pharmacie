<?php require_once('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prodstock11.css">
</head>
<body>
<div class="title">
    <h1><span>PRODUCTS</span> STOCK</h1>
</div>
<div>
<?php
    $con = new mysqli("localhost", "root", "", "pharmaceutique");
    $reponse= $con->query('SELECT * FROM produits WHERE quantityonhand < 5 ');
?>
    <table class="styled-table">
        <thead>
            <tr>
                <td>Product name</td>
                <td>Date Of Expiration</td>
                <td>Description</td>
                <td>Quantity on hand</td>
                <td>Added at</td>
            </tr>
        </thead>
        <?php //Affichages des lignes du tableau
            while($donnees = mysqli_fetch_array($reponse)) {
        ?>
        <tr>
            <td><?php echo $donnees['productname'];?></td>
            <td><?php echo $donnees['expirationdate'];?></td>
            <td><?php echo $donnees['descrip'];?></td>
            <td><?php echo $donnees['quantityonhand'];?></td>
            <td><?php echo $donnees['addingdate'];?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <form action="sendemail.php" method="post">
        <button type="submit">Send </button>
    </form>
</div>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once('footer.php')
?>