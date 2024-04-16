
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy management</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="js/index.js">
    
</head>
<body>
    <div class="page-bakcground">
        
          <nav>
        
            <img src="assets/LogoINPT.PNG" alt="" class="logo">
            <ul>
                <li>
                    <a  href="index.php">HOME</a><br>
                </li>

                <li class="dropdown">
                   <select id="mySelect" onchange="redirectToSelected()">
                   <option value="option1">Spiciality</option>
                   <option value="https://healthray.com/pulmonologist/"> pulmonologist </option>
                   <option value="https://healthray.com/dermatologists/"> Dermatologists</option>
                   <option value="https://healthray.com/gynaecologist/">Gynaecologist</option>
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
                </li>
                <li>
                    <a href="Aboutus.php">About Us  </a><br>
                </li>
                <li class="cadre">
                    <a href="admin/index.php">ADMIN LOGIN</a> <br>
                </li>
                <li class="cadre">
                    <a href="admin/regestration/index1.php">SING UP</a> <br>
                </li>
                
            </ul>

          </nav>
     
    </div>
   
 
   
</body>
</html>
