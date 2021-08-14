<?php
require_once "dbconnect.php";
$error = false; 
if (isset($_POST['submit'])) {
$name = mysqli_real_escape_string($conn, $_POST['ename']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$branch = mysqli_real_escape_string($conn, $_POST['branch']);
$semester = mysqli_real_escape_string($conn, $_POST['semester']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']); 
if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}

if($password != $confirmpassword) {
$confirmpassword_error = "Password and Confirm Password doesn't match";
}
if (!$error) {
if(mysqli_query($conn, "INSERT INTO `users_info` (`Name`, `Email`, `Contact`, `Branch`, `Semester`, `Password`) VALUES('" . $name . "', '" . $email . "', '" . $contact . "', '" . $branch . "', '" . $semester . "', '" . ($password) . "')")) {
  //$showAlert = true;
  echo"<script>('You are logged in Sucessfully')</script>";
header("location: Registration.php");
exit();
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap(main).css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="Registration.css">

<head>
	<title>Registration</title>
</head>

<body>
	<!--     NAVBAR & SIDENAV --->
  <header>
   <nav>
     <ul>
     <li><h1>  BookADDA</h1></li>
     </ul>
    </nav>

     <nav>
      <ul>
      <li><a href="Main.php">Home</a></li>
      </ul>
    </nav>

    </header>
  

<!--Main Content-->

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
   <div class="content">

			               	
	
				 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="padding:5%">
    			 	<center>
    			  <br><h1><strong>Sign up</strong></h1><br>
              <h6>Full Name</h6>
              <input type="text" name="ename" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your Full Name" required>
              <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
    			    <br>       
    			    <h6>Email</h6>
    			    <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" placeholder="Enter your email id" required>
              <span class="text-danger">
              <br>
              <h6>Contact</h6>
              <input type="number" class="form-control" name="contact"  aria-describedby="emailHelp" placeholder="Enter your Contact" min="1000000000" max="9999999999" required>
              <span class="text-danger">
    			    <br> 
              <h6>Branch</h6>
              <input type="text" class="form-control" name="branch" aria-describedby="emailHelp" placeholder="Enter your Branch" required="">
              <br>
              <h6>Semester</h6>
              <input type="number" class="form-control" aria-describedby="emailHelp" name="semester" placeholder="Enter your semester" min="1" max="8" required>
              <br>
    			    <h6>Password</h6>
    			    <input type="password" class="form-control" name="password" placeholder="Password" required>
              <span class="text-danger">
    				  <br>
    			    <h6>Confirm Password</h6>
              <input type="password" class="form-control"  name="confirmpassword" placeholder="Confirm Password">
              <span class="text-danger"><?php if (isset($confirmpassword_error)) echo $confirmpassword_error; ?></span>
              <br>

    			    <button type="submit" name="submit" value="submit" class="btn btn-outline-success btn-block" style =" border-radius:2rem;">
    				  <b><a href="login.php">Register</a></b>
    				  </button>
              <br>

    			    <p style="color:orange;">Already have an account?<br><a id="A" href="login.php"> Login !</a></p>
				    </center>  
				  </form>
		
				
  </div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
$(document).ready(function() {
  modal.style.display = "block";
})

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>


