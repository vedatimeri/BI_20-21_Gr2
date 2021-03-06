
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open University</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="image-style.css">
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
            <a href="#">A-Z Index</a> | <a href="studentlogin.php">Student Login</a> | <a href="loginstaff.html" onclick="openLoginForm()">Staff Login</a>
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
                <li><a href="Javascript.html">Javascript</a></li>
                <li><a href="#">Porfolio</a></li>
                <li><a href="gallery.html">Gallery </a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </section>
    <section class="baner">  
        <div id="fotoja">
            <img src="images/graduation.jpg" alt="">
        </div> 

       
    </section>
    <section style="background-color: #f2f2f2;     width: 1300px;">
    <?php

if (isset($_GET['name'])) {
    $mesazhi = 'Pershendetje ' . $_GET['name'] . '!';
} else {
    $mesazhi = 'Pershendetje musafir!<br>';
}

echo $mesazhi;

?>
<div align="center">
<form  action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <p>
        <label for="name">Emri</label><br>
        <input type="text" name="user_name" id="name" value="<?= $_GET['name'] ?? '' ?>">
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="text" name="user_email" id="email">
    </p>
    <p>
        <textarea name="message" rows="4"></textarea>
    </p>
    <p>
        <input type="submit" name="submit" value="Dergo">
    </p>
</form>
</div>

<?php

/*Super Globals */

//Tregon path ku ndodhet file qe ekzekutohet
echo $_SERVER['PHP_SELF'] . "<br><br>";

//Tregon vendin ku ndodhen serveri
echo $_SERVER['SERVER_NAME'] . "<br><br>";

//Tregon portin ne te cilin eshte serveri
echo $_SERVER['SERVER_PORT'];





?>
</section>

<!-- <p align="center"><a href="index.php">Kthehu ne Home</a></p> -->
<section id="linksfooter">
        
        <h4 class="textsection">Quickly Find What You Are Looking For</h4>
            <hr>
        <div class="container">
            
            <div class="first">
                <ul>
                    <li><a href="#">?? Visiting the University</a></li>
                    <li><a href="#">?? Maps and Directions</a></li>
                    <li><a href="#">?? Undergraduate Courses</a></li>
                    <li><a href="#">?? Graduate Courses</a></li>
                    <li><a href="#">?? Postgraduate Research</a></li>
                    <li><a href="#">?? Postgraduate Taught</a></li>
                    <li><a href="#">?? International Students</a></li>
                    <li><a href="#">?? Lifelong Learning</a></li>
                    <li><a href="#">?? Graduate Health Services</a></li>
                    <li><a href="#">?? Graduate Housing</a></li>
                    <li><a href="#">?? Graduate Programs</a></li>
                    <li><a href="#">?? Graduate Student Association</a></li>
                </ul>
            </div>

            <div class="second">
                <ul>
                    <li><a href="#">?? Academic Advisory</a></li>
                    <li><a href="#">?? Academic Assistance</a></li>
                    <li><a href="#">?? Academic Calendar</a></li>
                    <li><a href="#">?? Academics Office</a></li>
                    <li><a href="#">?? Administration</a></li>
                    <li><a href="#">?? Adult Learner</a></li>
                    <li><a href="#">?? Alumni Chapters</a></li>
                    <li><a href="#">?? Alumni Events</a></li>
                    <li><a href="#">?? Language Resources</a></li>
                    <li><a href="#">?? Intramural Sports</a></li>
                    <li><a href="#">?? Language Resources</a></li>
                    <li><a href="#">?? Maps and Directions</a></li>
                </ul>
            </div>

            <div class="third">
                <ul>
                    <li><a href="">?? Athletics</a></li>
                    <li><a href="">?? Campus Life At a Glance</a></li>
                    <li><a href="">?? Campus Recreation</a></li>
                    <li><a href="">?? Campus Safety & Security</a></li>
                    <li><a href="">?? Class Schedules</a></li>
                    <li><a href="">?? Counselling Center</a></li>
                    <li><a href="">?? Course Descriptions & Catalogue</a></li>
                    <li><a href="">?? Department Directory</a></li>
                    <li><a href="">?? Residential Colleges</a></li>
                    <li><a href="">?? Schools and Colleges</a></li>
                    <li><a href="">?? Student Activitie</a></li>
                    <li><a href="">?? Student Affairs</a></li>
                </ul>
            </div>

            <div class="fourth">
                <ul>
                    <li><a href="">?? Departments & Programs</a></li>
                    <li><a href="">?? Fellowships</a></li>
                    <li><a href="">?? Finals Schedules</a></li>
                    <li><a href="">?? Financial Aid</a></li>
                    <li><a href="">?? Fitness and Recreation Facilities</a></li>
                    <li><a href="">?? Global Learning</a></li>
                    <li><a href="">?? Graduate</a></li>
                    <li><a href="">?? Graduate Admissions</a></li>
                    <li><a href="">?? Student Research</a></li>
                    <li><a href="">?? Students with Disabilities</a></li>
                    <li><a href="">?? Transfer Students</a></li>
                    <li><a href="">?? Undergraduate Admissions</a></li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p>Copyright ?? <script type="text/javascript">
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
