<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Na kontaktoni</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="CStyle.css">  -->
    <!-- <link rel="stylesheet" href="image-style.css">
    <link rel="stylesheet" href="PStyle.css"> -->
</head>

<body>
    <header>
        <div class="left">
        <h1>Open University</h1>
        <p>Free PSD Website Template</p>
        </div>
        <div class="right">
        <div class="menu-top">
            <a href="#">A-Z Index</a> | <a href="studentlogin.php">Student Login</a> | <a href="#" onclick="openLoginForm()">Staff Login</a>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Style Demo</a></li>
                <li><a href="#">Full width</a></li>
                <li><a href="#">Dropdown</a></li>
                <li><a href="#">Porfolio</a></li>
                <li><a href="#">Gallery </a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </section>
    <section class="baner">  
        <div id="fotoja">
            <img src="images/graduation.jpg" alt="">
        </div> 
    </section>



    <section  class="logohu">

    
        <h1 class="loginTitle">Na kontaktoni</h1>
        <?php
 include "LidhjameDB.php";

    if(isset($_POST['butonilogin'])){
        $emri = $_POST['emri'];
        $email = $_POST['email'];
        $mesazhi = $_POST['mesazhi'];

        $sql = "INSERT INTO kontakti(emri, email, mesazhi)"
        . " VALUES('$emri','$email','$mesazhi')";
   
   
   $retval = mysqli_query($con, $sql);

  
   if(!$retval){
       die('Lidhja nuk mund te realizohet'. mysqli_connect_error());
   
   }
   echo "Falemnderit qe na kontaktuat!";
   
  
   
   
   mysqli_close($con);   
    }
?>
        <form id="form-login" method="post" action=""> 
 
           <p><label>Emri: </label>  <br> 
            <input type="text" placeholder="Enter Username" name="emri" id="emri" required>  </p> 
            <p>  <label>Email: </label>   <br> 
            <input type="text" placeholder="Enter Email" name="email"  id="email" required> </p>
            <p>  <label>Mesazhi: </label>   <br> 
            <textarea id="mesazhi" name="mesazhi" rows="4" cols="50"></textarea></p>
            
            <button id="butonilogin" type="submit"  name="butonilogin">Login</button>   
     </form> 
    </div> 

</section>

    <section id="linksfooter">
        
        <h4 class="textsection">Quickly Find What You Are Looking For</h4>
            <hr>
        <div class="container">
            
            <div class="first">
                <ul>
                    <li><a href="#">» Visiting the University</a></li>
                    <li><a href="#">» Maps and Directions</a></li>
                    <li><a href="#">» Undergraduate Courses</a></li>
                    <li><a href="#">» Graduate Courses</a></li>
                    <li><a href="#">» Postgraduate Research</a></li>
                    <li><a href="#">» Postgraduate Taught</a></li>
                    <li><a href="#">» International Students</a></li>
                    <li><a href="#">» Lifelong Learning</a></li>
                    <li><a href="#">» Graduate Health Services</a></li>
                    <li><a href="#">» Graduate Housing</a></li>
                    <li><a href="#">» Graduate Programs</a></li>
                    <li><a href="#">» Graduate Student Association</a></li>
                </ul>
            </div>

            <div class="second">
                <ul>
                    <li><a href="#">» Academic Advisory</a></li>
                    <li><a href="#">» Academic Assistance</a></li>
                    <li><a href="#">» Academic Calendar</a></li>
                    <li><a href="#">» Academics Office</a></li>
                    <li><a href="#">» Administration</a></li>
                    <li><a href="#">» Adult Learner</a></li>
                    <li><a href="#">» Alumni Chapters</a></li>
                    <li><a href="#">» Alumni Events</a></li>
                    <li><a href="#">» Language Resources</a></li>
                    <li><a href="#">» Intramural Sports</a></li>
                    <li><a href="#">» Language Resources</a></li>
                    <li><a href="#">» Maps and Directions</a></li>
                </ul>
            </div>

            <div class="third">
                <ul>
                    <li><a href="">» Athletics</a></li>
                    <li><a href="">» Campus Life At a Glance</a></li>
                    <li><a href="">» Campus Recreation</a></li>
                    <li><a href="">» Campus Safety & Security</a></li>
                    <li><a href="">» Class Schedules</a></li>
                    <li><a href="">» Counselling Center</a></li>
                    <li><a href="">» Course Descriptions & Catalogue</a></li>
                    <li><a href="">» Department Directory</a></li>
                    <li><a href="">» Residential Colleges</a></li>
                    <li><a href="">» Schools and Colleges</a></li>
                    <li><a href="">» Student Activitie</a></li>
                    <li><a href="">» Student Affairs</a></li>
                </ul>
            </div>

            <div class="fourth">
                <ul>
                    <li><a href="">» Departments & Programs</a></li>
                    <li><a href="">» Fellowships</a></li>
                    <li><a href="">» Finals Schedules</a></li>
                    <li><a href="">» Financial Aid</a></li>
                    <li><a href="">» Fitness and Recreation Facilities</a></li>
                    <li><a href="">» Global Learning</a></li>
                    <li><a href="">» Graduate</a></li>
                    <li><a href="">» Graduate Admissions</a></li>
                    <li><a href="">» Student Research</a></li>
                    <li><a href="">» Students with Disabilities</a></li>
                    <li><a href="">» Transfer Students</a></li>
                    <li><a href="">» Undergraduate Admissions</a></li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p>Copyright © <script type="text/javascript">
            document.write(new Date().getFullYear());
            </script> All Rights Reserved - Open University.  </p>
    </footer>
    <script>
        setInterval(
function () {
  var randomColor = Math.floor(Math.random()*16777215).toString(16);
  document.body.style.backgroundColor = "#"+randomColor;
},100000); // 16777215 ngjyra e bardhe ne decimal
    </script>
</body>
</html>