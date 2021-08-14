<?php
include 'dbconnect.php';
 session_start();

 $name = $_SESSION['ename'];



//$numExistRows = mysqli_num_rows($result);
 
 
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<title>Profile</title>
</head>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <!--<link rel="stylesheet" href="/static/css/profile.css">-->
    <link rel="stylesheet" type="text/css" href="bootstrap(main).css">
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
<body>

<!--Navbar-->

<div class="menu-wrap">
  <input type="checkbox" class="toggler">
  <div class="hamburger">
    <div></div>
  </div>
  <div class="menu">
    <div>
      <ul>
        <li><img src="Profile.png" height="30%" width="30%"></li>
        <li style="color: white; font-size:2rem;"><b><?php echo $_SESSION['ename']?></b></li>
        <li><a href="Profile.php">Profile</a></li>
        <li><a href="login.php">Logout</a></li>
        <li><a href="#">Wishlist</a></li>
        <li><a href="#">Wallet</a></li>
        <li><a href="#">Refer a Friend</a></li>
      </ul>
    </div>
  </div>
</div>
	<header>
	 <nav>
     <ul>
     <li><h1>  BookADDA</h1></li>
     </ul>
    </nav>

     <nav>
      <ul>
      <li><a href="Contentspage.php">Home</a></li>
      <li><a href="Profile.php">Profile</a></li>
      <li><a href="MyCart.php">Cart</a></li>
      </ul>
    </nav>

    <nav>
     <ul>
      <form action="" autocomplete="on">
       <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
     </form>
     </ul>
    </nav>
    </header>

<!--PROFILE PART-->


<div class="row" id="row">
	
  	<div class="card col-mg-6 col-sm-4" style="padding-top: 2%;">
  		<center>
		<img src="Profile.png" style="max-height: 75%;max-width: 75%;" class="card-img-top" alt="...">
		<br><br>
		<div class="card-body">
			<h1 class="card-title" style="color: #b630d8"><b><?php echo $_SESSION['ename']?></b></h1>
		</div>
		</center>
	</div>

	<div class="card col-mg-6 col-sm-8" style="padding-top: 2%;">
		<div class="card-body">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#one" style="color: black;" class="nav-link active" data-toggle="tab">Profile</a>
				</li>
				<li class="nav-item">
					<a href="#two" style="color: black;" class="nav-link" data-toggle="tab">My Books</a>
				</li>
				<li class="nav-item">
					<a href="#three" style="color: black;" class="nav-link" data-toggle="tab">My Freinds</a>
				</li>
				<li class="nav-item">
					<a href="#four" style="color: black;" class="nav-link" data-toggle="tab">Change Password</a>
				</li>
				<li class="nav-item">
					<a href="#five" style="color: black;" class="nav-link" data-toggle="tab">My Orders</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="one">
					<form method="POST" style="padding: 5%;">
						<?php 
						$sql = "SELECT branch,semester,email,contact from users_info where name = '$name'";
							$result = mysqli_query($conn, $sql); 
							if (!$result) {
							    echo 'Could not run query: ' . mysql_error();
							    exit;
							}
							$row = mysqli_fetch_row($result);

							
							
						?> 
						<div class="form-group">

							<label for="exampleFormControlInput1">Branch</label>
							<input class="form-control" type="text" placeholder="<?php echo $row[0];?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Semester</label>
							<input class="form-control" type="text" placeholder="<?php echo $row[1];?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email address</label>
							<input class="form-control" type="text" placeholder="<?php echo $row[2];?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Phone number</label>
							<input class="form-control" type="text" placeholder="<?php echo $row[3];?>" readonly>
						</div>
						
					</form>
					
				</div>
				<div class="tab-pane fade" id="two">
					<div class="container">
						<div class="row m-0">
							<div class="col-md-12" style="margin-top: 5%;">
								<h4 class="text-muted">Books Sold</h4>
								<table width="100%">
									 
										<?php
							              $total=0;

							              if(isset($_SESSION["profile"])) 
							              {
							                foreach($_SESSION["profile"] as $key => $value)
							                {
							                  
							            ?>
							           <tr>    
									<td>
										<div class="image-parent">
											<img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg">
										</div>
									</td>
									<td>
										<h5><?php echo" $value[Title]";?></h5><br>
										<h6><?php echo" $value[Price]";?></h6>
									</td>
									<td align="right">
									<a class="btn btn-outline-success btn-sm" href="updateform.php">Edit Info</a>
									</td>
									<br>
									</tr>
									<?php          

						                }
						            }
						            ?> 
									
								</table>
								 
							</div>
						</div>
					</div>

					<br>
					<div>
						<a class="btn btn-outline-success" href="productform.php"> Sell A Book</a>
					</div>	
				</div>
				<div class="tab-pane fade" id="three" style="padding: 5%;">
					<p>My Friends tab content ...</p>
				</div>
				<div class="tab-pane fade" id="four" style="padding: 5%;">
					<div class="form-group" >
						<label for="exampleFormControlInput1">Old Password</label>
						<input class="form-control" type="text" placeholder="">
					</div>
					<div class="form-group" >
						<label for="exampleFormControlInput1">Change Password</label>
						<input class="form-control" type="text" placeholder="">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Confirm Password</label>
						<input class="form-control" type="text" placeholder="">
					</div>
					<div>
						<button class="btn btn-outline-success" type="submit">Submit</button>
					</div>
				</div>
				<div class="tab-pane fade" id="five" style="padding: 5%;">
					<div class="container">
						<div class="row m-0">
							<div class="col-md-12" style="margin-top: 5%;">
								<h4 class="text-muted">Books Bought</h4>
								<table width="100%">
									 
										<?php
							              $total=0;

							              if(isset($_SESSION["profile"])) 
							              {
							                foreach($_SESSION["profile"] as $key => $value)
							                {
							                  
							            ?>
							           <tr>    
									<td>
										<div class="image-parent">
											<img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg">
										</div>
									</td>
									<td>
										<h5><?php echo" $value[Title]";?></h5><br>
										<h6><?php echo" $value[Price]";?></h6>
									</td>

									<br>
									</tr>
									<?php          

						                }
						            }
						            ?> 
									
								</table>
								
							</div>
						</div>
					</div>

				</div>  
			</div>
		</div>
	</div>
</div>

</body>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f15f0c47258dc118bee9b7c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>




<!--cur = mysql.connection.cursor()

		#CHECK IF AUTHOR IS ALREADY PRESENT
		result1 = cur.execute("select * from author where Author = %s",[author])
		if result1 > 0:
			data1 = cur.fetchone()
		else:
			cur.execute("insert into author(Author_id,Author) values(%s,%s)",(101,author))

		#CHECK IF PUBLISHER IS ALREADY PRESENT
		result2 = cur.execute("select * from publisher where Publisher = %s",[publisher])
		if result2 > 0:
			data2 = cur.fetchone()
			p_id = data2.get("P_id")
		else:
			cur.execute("insert into publisher(P_id,Publisher) values(%s,%s)",(201,publisher))

		#CHECK IF EDITION IS ALREADY PRESENT
		result3 = cur.execute("select * from edition where Edition = %s",[edition])
		if result3 > 0:
			data3 = cur.fetchone()
			e_id = data3.get("Edition_id")
		else:
			cur.execute("insert into edition(Edition_id,Edition) values(%s,%s)",(301,edition))


		result1 = cur.execute("select * from author where Author = %s",[author])
		data1 = cur.fetchone()
		a_id = data1.get("Author_id")
		app.logger.info(a_id)

		result2 = cur.execute("select * from publisher where Publisher = %s",[publisher])
		data2 = cur.fetchone()
		p_id = data2.get("P_id")

		result3 = cur.execute("select * from edition where Edition = %s",[edition])
		data3 = cur.fetchone()
		e_id = data3.get("Edition_id")

		cur.execute("insert into book(Book_id,Book_name,Category,Price,Description,S_id,Author_id,P_id,Edition_id) values(%s,%s,%s,%s,%s,%s,%s,%s,%s)",(7501,title,category,price,description,35021,a_id,p_id,e_id))

        cur.close()
    
    
    
    
    
    -->