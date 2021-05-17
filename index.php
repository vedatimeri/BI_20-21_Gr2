
<!-- Sesionet -->

<?php
session_start();
if(!isset($_SESSION['numri']) && !isset($_SESSION['thanks'])){
$_SESSION["thanks"] = "Faleminderit që na vizituat!";
$_SESSION["numri"] = 0;
}
else {
  $_SESSION['numri'] += 1;
}
if($_SESSION['numri']>=10){
  $_SESSION["thanks"] = "Faleminderit që na vizituat mbi 10 here!";
}
$mesazhi = "Ju na keni vizituar " .$_SESSION['numri']. " here". "<br>". $_SESSION['thanks'];
?>
<?php
  $emri = 'user';
  $vlera = 'GrupiDy';  	
  setcookie($emri, $vlera, time() + (86400 * 80), '/');
?>

<?php
  $emri = 'user';
  setcookie($emri, "", time() -3600);
?>


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
            <a href="#">A-Z Index</a> | <a href="studentlogin.php">Student Login</a> | <a href="Student.php">Student</a>
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
                <li><a href="Javascript.html">Javascript</a></li>
                <li><a href="Student.php">Student</a></li>
                <li><a href="gallery.html">Gallery </a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </section>
    <section class="baner">  
        <div id="fotoja">
            <img src="images/graduation.jpg" alt="">
        </div> 

       
    </section>


 <section style="background-color: #f2f2f2;     width: 1300px;">
 
     <p align="center"><?php  echo ( $mesazhi ); ?></p>
     <p align="center">
     <?php
      if(!isset($_COOKIE[$emri])) {    
        echo "Cookie e quajtur '" . $emri . "' has not been set!";
      } else { 
        echo "Cookie '" . $emri  . "' has been set!<br>";    
        echo "Value in cookie is: " . $_COOKIE[$emri];
      }
    ?>
     </p>
     <p align="center"><?php echo "Cookie " . $emri ." eshte fshirë"?></p>

     <p align="center"><a href="vargjet.php">Vargjet</a></p>
     <p align="center"><a href="superglobals.php">Superglobals</a></p>
 </section>



    <section class="imazhet">
    
    
          <div class="photos">
            <table class="img-table">
                <tr>
                    <td>
                        <img src="images/graduation.jpg" alt="" style="margin-top: 40px;">
                        <p style="margin-left: 40px;" >Prospectice Students</p>
                    </td>
                    <td><img src="images/graduation.jpg" alt="" style="margin-top: 40px;">
                        <p style="margin-left: 40px;">Correct Students</p>
                    </td>
                    <td><img src="images/graduation.jpg" alt="" style="margin-top: 40px;">
                        <p style="margin-left: 40px;">International Students</p>
                    </td>
                    <td><img src="images/graduation.jpg" alt="" style="margin-top: 40px;">
                        <p style="margin-left: 40px;">Administration</p>
                    </td>
                </tr>
               
            </table>
        </div>

        <!-- <div class="photos2" style="float: left;">
            <div class="form-1" style="width: 300px; height:600px; background-color: red;">
                <p>PParagrafi1</p>
            </div>
            <div class="form-2" style="width: 300px; height:600px; background-color: blue;">
                <p>PParagrafi1</p>
            </div>
            <div class="form-3" style="width: 300px; height:600px; background-color: yellow;">
                <p>PParagrafi1</p>
            </div>          

        </div> -->
        <div class="whitebackground">
        <div class="Row">
            <div class="Column">
                
                <div >
                    <br>
                    <table class="c1">
                        <tr> <th style="margin-left: 20px;">Make An Aplication</th></tr>
                        <tr> <td style="margin-top: 30px;"><img src="images/graduation.jpg" alt="" style="margin-top: 25px;">
                         <p style="margin-left: 15px;" style="margin-top: 10px;">Ordr a porpuse</p>
                             </td>
                        </tr>
                        
                          <tr><td><img src="images/graduation.jpg" alt="">
                             <p style="margin-left: 15px;">International Students</p>
                         </td>
                         <tr><td><img src="images/graduation.jpg" alt=""></td></tr>
                       
                     
     
     
                     </table>
                </div>
            </div>
            <div class="Column2">
                <br>
                <table>
                    <tr><th colspan="2">Last news & Events</th></tr>
                    <tr>
                        <td><img src="images/graduation.jpg " alt=""></td>
                        <td>
                            <div class="news-div" style="margin-bottom: 90px;">
                            <p style="font-size: 23px;">Semtusquisque morbi duo  congue</p>
                            
                        <label for="text">Universiteti une eshte nnje nder me te miren ne rajon
                        ghithashtu ne garat e mbajtura ka dalur gjithmon si <br>
                        nder 3 me te miret duke lene pas<br> shume universitete <br>
                       qe me heret ishin edhe ne gara boterore gjitashtu</label>
                            </div>
                        
                        
                     </td>
                    </tr>
                    <tr>
                       <td><img src="images/graduation.jpg " alt=""></td>
                       <td><div class="news-div" style="margin-bottom: 90px;">
                        <p style="font-size: 23px;">Semtusquisque morbi duo  congue</p>
                        
                    <label for="text">Universiteti une eshte nnje nder me te miren ne rajon
                    ghithashtu ne garat e<br> mbajtura ka dalur gjithmon si 
                    nder 3 me te miret duke <br>lene pas shume universitete 
                    qe me heret ishin edhe ne gara boterore gjitashtu</label>
                        </div>
                        </td>
                       

                    </tr>
                    <tr style="font-size: 23px;">
                        <td colspan="2">
                            <p style="margin-left: 160px; margin-top: -30px;" >Click here to view all news and events ></p></td>
                    </tr>

                </table>


            </div>
            <div class="C3">
                <table>
                    <br>
                    <th>Take the Virtuan Tour</th>
                    <tr>
                       <td> <video width="270" height="300" controls style="margin-top: 17px;">
                            <source src="images/video.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                        </video>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Kjo video teregon  se eshte<br>
                            per nje universitete jo ne kosove<br>
                            nder me te miret <a href="#">Click here</a></em>
                        </p></td>

                    </tr>
                </table>
            </div>
        </div>
        </div>
         
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
