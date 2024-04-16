<?php require_once('header.php');
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="index3.css"/>
    <link rel="stylesheet" href="div.css">

</head>
<body>
    <!-- home page section -->
    <section class="Home">
        <section class="Home1">
        <div class="background-div">
            <div class="ziro"><br><br>
               <?php
// Start the session
session_start();

// Assuming you've connected to your database already
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials
$conn = mysqli_connect("localhost", "root", "", "pharmaceutique");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the username from the session
$username = $_SESSION['username'];

// Prepare a SQL query to check if the user exists
$sql = "SELECT * FROM admins WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User exists, show the user
    echo '<div class="ziro"><br><br><h1>Hello <span>' . htmlspecialchars($username) . '</span> &#128540</h1></div><br><br><br><br><br><br><br>';
} else {
    // User doesn't exist (this should not happen if the user is authenticated)
    echo 'User not found.';
}

// Close the connection
mysqli_close($conn);
?>
 <table>
              <tr>
                 <th><a href="Addpatient.php"><img src="assets/addpatient.png" alt=""></a><br>
                 <a href="Addpatient.php">Add <br> Patient</a></th>
                 <th><a href="Allpatients.php"><img src="assets/allpatients.png" alt=""></a><br>
                 <a href="Allpatients.php">All <br>patients</a></th>
                 <th><a href="Allprod.php"><img src="assets/allproducts.png" alt=""></a><br>
                 <a href="Allprod.php">All <br> products</a></th>
                  <th><a href="Addprod.php"><img src="assets/addproduct.png" alt=""></a><br>
                  <a href="Addprod.php">Add <br>product</a></th>
                 <th><a href="prodstock.php"><img src="assets/prodoutofstock.png" alt=""></a><br>
                 <a href="prodstock.php">product out <br>of stock</a></th>
              </tr>
            </table>
            </div>
            <br><br><br><br><br>
        </section>
        
           

             <br><br><br><br><br>
            <h1 class="un"><span>Pharmacy</span> Management System</h1>
            <div class="paragraph-container"> 
               <p >
                   A Pharmacy Management System presents
                    a transformative solution for pharmacies, 
                   enhancing efficiency, accuracy,
                   and compliance while improving customer service.
                   By automating processes such as inventory management
                   and prescription processing, it optimizes workflow, 
                   allowing pharmacists to focus more on patient care. 
                   With features like real-time inventory tracking and 
                   electronic record-keeping, 
                   it ensures regulatory compliance and patient safety.
                   Moreover, it fosters improved customer service 
                   through personalized care, online
                    prescription refills,
                   and data-driven insights. Overall, a Pharmacy 
                   Management System revolutionizes pharmacy operations,
                   enabling scalability and innovation in 
                   today's healthcare landscape.
               </p>
               <img src="https://healthray.com/wp-content/uploads/2024/01/Healthray-Feature-pharmacy.webp" alt=""><br><br><br><br>
                <h1 class="ta9h11">300+</h1>
                <p class="ta9p1">ACTIVE HOSPITALS</p>
                <h1 class="ta9h12">3M+</h1>
                <p class="ta9p2">RX WRITTEN</p>
                <h1 class="ta9h13">12+</h1>
                <p class="ta9p3">SPECIALITIES</p>
                
            </div><br><br><br><br>
            <h1 class="deux">What Is <span>Pharmacy</span> Management Software?</h1>
            <div class="paragraph_deux"><br><br>
                <p>
                A modern software programme called a pharmacy management system
                 is intended to transform pharmacy operations. This comprehensive 
                 solution includes effective inventory control, streamlined patient
                  and prescription management, smooth integration of billing and insurance, 
                  workflow automation, compliance to regulatory requirements,
                   extensive reporting and analytics, and a user-friendly interface. 
                From accurate stock management in pharmacy to automated
                prescription processing and regulatory compliance,
                pharmacy pos system assures enhanced
                efficiency, accuracy, and increased patient care. 
                It’s essential to a highly advanced and orderly pharmacy setting,
                providing employees with simple 
                functionality and insights to make well-informed decisions
                </p>
                <img src="https://healthray.com/wp-content/uploads/2024/01/pharmacy-management-system-1536x696.webp" alt="">
            </div><br><br><br><br>
            <h1 class="trois">Open Your Online <span>Pharmacy </span>Store In Just 5 Days!</h1>
            <div class="paragraph_trois">
                <p>
                Are you tired of error-prone WhatsApp / Phone call order
                 taking? No worries. Your customers can now place orders 
                 online with your own branded pharmacy app, with prescription upload.
                </p>
                <img src="https://healthray.com/wp-content/uploads/2024/01/online-pharmacy-store.webp" alt="">
            </div><br><br><br><br>
            <div class="paragraph_quatre">
            <h1 class="quatre">Why Do Pharmacies Need <span>Pharmacy </span>Management System?</h1>
            <p>
            Are you tired of error-prone WhatsApp / Phone call order taking? No worries.
            Your customers can now place orders online with your own branded
             pharmacy app, with prescription upload. 
             Are you tired of error-prone WhatsApp / Phone call order taking? No worries.
            Your customers can now place orders online with your own 
            branded pharmacy app, with prescription upload
            </p><br><br>
            <img src="assets/sit.jpg" alt="">
            </div>
        </div>
    </section><br>
    <section class="comentaire">
       <div class="paragraph_cinq">
        <h1 class="cinq">What Our <span> Doctors</span> Often Say About Our <span>PMS System</span></h1><br><br>
        <p>
          Uncover the experiences of our customers who have leveraged the power of Healthray's PMS System
        </p>
        <div class="opinions-container">
           <div class="opinion">
               <div class="opinion-text">
                <img src="https://healthray.com/wp-content/uploads/2024/02/Suhani-Pharmacy-Healthray.webp" alt="">
                <h3>Suhani Pharmacy</h3>
                <img class="image1" src="assets/image.png" alt="">
               </div>
               </div>
               <div class="opinion">
               <div class="opinion-text">
                
                <img src="https://healthray.com/wp-content/uploads/2024/02/Om-Pharmacy-Healthray.webp" alt="">
                <h3>Om Medical</h3>
                <img src="assets/image3.jpg" alt="">
               </div>
               </div>
               <div class="opinion">
               <div class="opinion-text">
                
                <img src="https://healthray.com/wp-content/uploads/2024/02/Beladiya-Pharmacy-Healthray.webp" alt="">
                <h3>Beladiya Pharmacy</h3>
                <img class="image2" src="assets/image2.jpg" alt="">
               </div>
               </div>
               
               
              
            </div>

            <script src="index.js"></script>
       </div>
    </section>
    

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head"> Adress</div>
                                <div class="sub-title">Inpt Al irfan Rabat</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abdellaali2550@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" href="mailto:abdellaali2550@gmail.com">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    
</body>
</html><br><br>
<?php require_once('footer.php');
?>