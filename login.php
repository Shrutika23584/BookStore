<?php
    $login = false; 
     $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'dbconnect.php';
        $name = $_POST["ename"];
        $password = $_POST["password"];
       
        

            $sql = "SELECT * from users_info where name='$name' AND password='$password' ";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num == 1){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['ename'] = $name;
                header("location: Contentspage.php");
            }


        
        else{
          echo"<script>alert('Invalid Credentials')</script>";
            //$showError = "Invalid credentials";
        }
    }
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bootstrap(main).css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="login.css">

<head>
	<title>Login</title>
</head>

<body>

<?php
    if($login){
      echo"<script>alert('You are logged in Sucessfully')</script>";
    }
   
?> 
	<header style="z-index: 4;">
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

   <div class="context" style="margin-top:1.5%;">
			      <div class="row justify-content-center" style="padding:5%;">

			       <div class="col-lg-6 col-sm-6" style="margin-top: 6%;margin-bottom: 0;">
			         <img src="52941.png" height="80%" width="600px">
			       </div>
			               	
			         <div class="details col-mg-3 col-sm-3">
				 <form action="/Final/login.php" method="POST"  style="padding:5%">
			 	<center>
			           <br>
			            <h1>
					<strong> Login</strong>
				   </h1>
			           <br>       
			             <h6>Username</h6>
			             <input type="text" class="form-control" name="ename" aria-describedby="emailHelp" placeholder="Enter your Username">
			            <br> 
			            <h6>Password</h6>
			             <input type="password" class="form-control" name="password" placeholder="Enter your Password">
				    <br>
			            <p>Forgot password ?<br><a id="A" href="#"> Click here!</a>
				    </p><br>

			            <button type="submit" class="btn btn-outline-success btn-block" id="myBtn" style =" border-radius:2rem;">
				   <b>Login</b>
				    </button><br>

			              <p>Don't have account?<br><a href="Registration.php"> Register now!</a></p>
				         
				  </form>
				  </div>
				</div>
    </div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
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