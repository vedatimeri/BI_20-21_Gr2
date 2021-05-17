<?php
include "LidhjameDB.php";


if(isset($_POST['butonilogin'])){

    // $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    // $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" && $password != ""){

        $sql_query = "select count(*) as Student from users where email='".$email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['Student'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: home.php');
        }else{
            echo "Invalid email and password";
        }

    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="login.js"></script>
</head>
<body>
    <header>
        <div class="left">
        <h1>Open University</h1>
        <p>Free PSD Website Template</p>
        </div>
        <div class="right">
        <div class="menu-top">
            <a href="#">A-Z Index</a> | <a href="studentlogin.php">Student Login</a> | <a href="loginstaff.html">Staff Login</a>
        </div>

        <div class="search">
            <form action="">
                <input type="search" name="search" id="search" placeholder="Search Our Website...">
                <input type="submit" value="SEARCH">
                </form>
        </div>
    </div>
    </header>
    
        <section class="menu">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Style Demo</a></li>
                <li><a href="#">Full width</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="Student.php">Student</a></li>
                <li><a href="gallery.html">Gallery </a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </section>

    <section class="logohu">
        <h1 class="loginTitle">Student Staff</h1>

        <form id="form-login" method="post" action=""> 
        <div>   
           <p><label>Email : </label>   
            <input style="margin: 8px 0;
  padding: 12px 20px;
  border: 2px solid green;
  box-sizing: border-box; margin-left: 20px" type="email" placeholder="Enter Email" name="email" id="email" required>  </p> 
            <p>  <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password"  id="password" required> </p>
            <button id="butonilogin" type="submit"  name="butonilogin">Login</button>   
        </div>   
       
    </form>  
    <p align="center">Nese nuk keni llogari kliko ketu per tu regjistruar <button type="button"class="btn btn-success"><a href="regjistrohu.php">Regjistrohu</a></button></p>
    </section>

    <footer class="footer">
        <p>Copyright © <script type="text/javascript">
            document.write(new Date().getFullYear());
            </script> All Rights Reserved - Open University.  </p>
    </footer>

</body>
</html>