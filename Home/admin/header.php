
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy management</title>
    <link rel="stylesheet" href="header.css">
    
</head>
<body>
    <div class="page-bakcground">
        
          <nav>
        
            <img src="assets/LogoINPT.PNG" alt="" class="logo">
            <ul>
                <li class="cadre">
                    <a  href="http://localhost/tuts/pharmaceutique/index.php">HOME</a><br>
                </li>
                <li class="dropdown">
                   <select id="mySelect" onchange="redirectToSelected()">
                   <option value="option1">STOCK MANAGEMENT</option>
                   <option value="http://localhost/tuts/pharmaceutique/Home/admin/Allprod.php"> All PRODUCTS</option>
                   <option value="http://localhost/tuts/pharmaceutique/Home/admin/Addprod.php"> ADD PRODUCTS</option>
                   <option value="http://localhost/tuts/pharmaceutique/Home/admin/prodstock.php">PRODUCTS OUT OF STOCK</option>
                </select>
                <script>
                function redirectToSelected() {
                    var selectBox = document.getElementById("mySelect");
                    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                    if (selectedValue.startsWith("http")) {
                    window.location.href = selectedValue;
                    }
                }
                </script>
                <li>
                <li class="cadre">
                    <a  href="Addpatient.php">ADD PATIENT</a><br>
                </li>
                <li class="cadre">
                    <a  href="Allpatients.php">ALL PATIENTS</a><br>
                </li>
                
                    
                <li class="cadre">
                    <a href="http://localhost/tuts/pharmaceutique/Home/Aboutus.php">About Us  </a><br>
                </li>
                <li class="cadre">
                    <a href="http://localhost/tuts/pharmaceutique/Home/Contactus.php">Contact Us  </a> <br>
                </li>
                
                
            </ul>

          </nav>
     
    </div>
   
 
   
</body>
</html>
