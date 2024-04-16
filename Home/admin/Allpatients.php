<?php require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="allpatient11.css">
</head>
<body><br>
    <div class="title">
        <h1>Pastients <span> Details</span></h1>
    </div>
    <div>
    <?php
    $con = new mysqli("localhost", "root", "", "pharmaceutique");
    $reponse= $con->query('SELECT * FROM patient');
    ?>
    <table class="styled-table">
        <thead>
        <tr>
            <td>Full name </td>
            <td> Date Of Birth </td>
            <td> Gender </td>
            <td> Adress</td>
            <td> Email</td>
            <td> Phone number</td>
            <td> Did he has a desiase ?</td>
            <td>Picture </td>
        </tr>
        </thead>
        

    <?php //Affichages des lignes du tableau

    while($donnees = mysqli_fetch_array($reponse))
    {
    ?>
        <tr>
        <td><?php echo $donnees['fname'];?></td>
        <td><?php echo $donnees['dateofbirth'];?></td>
        <td><?php echo $donnees['gender'];?></td>
        <td><?php echo $donnees['adress'];?></td>
        <td><?php echo $donnees['email'];?></td>
        <td><?php echo $donnees['phonenumber'];?></td>
        <td><?php echo $donnees['disease'];?></td>
      
        </tr>
    <?php
    }


    ?>
    </table>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php require_once('footer.php');
?>