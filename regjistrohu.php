<?php 
include "LidhjameDB.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Regjistrohu</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

	<?php 
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['btnsignup'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['confirmpassword']);

		$isValid = true;

		// Check fields are empty or not
		if($fname == '' || $lname == '' || $email == '' || $password == '' || $confirmpassword == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}

        if($isValid && !(preg_match("/^([a-zA-Z' ]+)$/",$fname))) {
            $isValid = false;
            $error_message = "Name doesn't match the correct pattern";
        }

        if($isValid && !(preg_match("/^([a-zA-Z' ]+)$/",$lname))) {
            $isValid = false;
            $error_message = "Last Name doesn't match the correct pattern";
        }
        if($isValid && !(preg_match("/^.{8,}$/",$password))) {
            $isValid = false;
            $error_message = "Password must have at least 8 characters";
        }

		// Check if confirm password matching or not
		if($isValid && ($password != $confirmpassword) ){
			$isValid = false;
			$error_message = "Confirm password not matching.";
		}

		// Check if Email-ID is valid or not
		if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$isValid = false;
		  	$error_message = "Invalid Email-ID.";
		}

		if($isValid){

			// Check if Email-ID already exists


			$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$result = $stmt->get_result();
			$stmt->close();
            }
    
			if($result->num_rows > 0){
				$isValid = false;
				$error_message = "Email-ID is already existed.";
			
        }
			
		

		// Insert records
		if($isValid){
			$insertSQL = "INSERT INTO users(fname,lname,email,password ) values(?,?,?,?)";
			$stmt = $con->prepare($insertSQL);
			$stmt->bind_param("ssss",$fname,$lname,$email,$password);
			$stmt->execute();
			$stmt->close();

			$success_message = "Account created successfully.";
		}
	}
	?>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Style Demo</a></li>
                <li><a href="#">Full width</a></li>
                <li><a href="Javascript.html">Javascript</a></li>
                <li><a href="#">Porfolio</a></li>
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
    <section style="background-color:white;" > 
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<h2></h2>
			</div>

			<div class='col-md-6' >
					
				<form  method='post' action=''>

					<h1 align="center">Regjistrohu</h1>
					<?php 
					// Display Error message
					if(!empty($error_message)){
					?>
						<div class="alert alert-danger">
						  	<strong>Error!</strong> <?= $error_message ?>
						</div>

					<?php
					}
					?>

					<?php 
					// Display Success message
					if(!empty($success_message)){
					?>
						<div class="alert alert-success">
						  	<strong>Success!</strong> <?= $success_message ?>
						</div>

					<?php
					}
					?>
				
					<div class="form-group">
					    <label for="fname">First Name:</label>
					    <input type="text" class="form-control" name="fname" id="fname" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="lname">Last Name:</label>
					    <input type="text" class="form-control" name="lname" id="lname" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="pwd">Confirm Password:</label>
					    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required="required" maxlength="80">
					</div>
					
					<button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
				</form>
			</div>
			
			
		</div>
	</div>
                </sectiond>
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