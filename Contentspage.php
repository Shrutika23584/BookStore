<?php
session_start();

include 'dbconnect.php';



    

?>

<!Doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/74e6fadba6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bootstrap(main).css">
	<link rel="stylesheet" href="contents.css"> <!-- Resource style -->
	<script src="contents.js"></script> <!-- Modernizr -->
  	


	<title>Contentspage</title>
</head>
<body>
<div class="context">
	<div class="menu-wrap">
  <input type="checkbox" class="toggler" />
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
        <li><a href="wishlist.php">Wishlist</a></li>
        <li><a href="#">Wallet</a></li>
        <li><a href="#">Refer a Friend</a></li>
      </ul>
    </div>
  </div>
</div>
	<header>
	 <nav>
     <ul>
     <li><h1 style=" font-family: 'Exo', sans-serif;"><b>  BookADDA </b></h1></li>
     </ul>
    </nav>

     <nav>
      <ul>
      <li><a href="#">Home</a></li>
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



    <div class="cd-header justify-content-center" style="background: #000;">
		<h1><b>Currently Available</b></h1>

	</div>

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a  class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".color-1"><a  href="#0" data-type="color-1">Books</a></li>
					<li class="filter" data-filter=".color-2"><a  href="#0" data-type="color-2">PDF</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->
										
		<section class="cd-gallery">
			<ul>
				<?php
						$sql = "SELECT Title,Price from product_detail;";
						$result = mysqli_query($conn, $sql); 
						 $numExistRows= mysqli_num_rows($result);


	                      if($numExistRows > 0){
 							 while($row = mysqli_fetch_array($result)){
   				?>
				<li class="mix color-1 check1 radio2 option3" style="margin:10px;"><div style="background: white; padding:1%;border-radius:5px;"><img src="images/1.jpg" alt="Image 1">
					<div style="margin:10px;"><center><h5 style="color:black;"><strong><?php echo"$row[Title]";?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-rupee-sign"></i><?php echo"$row[Price]";?></h5></b></center></div>
					<button class="btn btn-outline-success btn-block" name="add" onclick="window.location.href='MyCart.php'">
    				  <b>Add to Cart</b>
    				  </button>
				</div></li>
				<?php          
					 }
					 
					}
				        
				?>




				<li class="gap"></li>
				<!--
				<li class="mix color-2 check2 radio2 option2"><img src="images/2.jpg" alt="Image 2"></li>
				<li class="mix color-1 check3 radio3 option1"><img src="images/3.jpg" alt="Image 3"></li>
				<li class="mix color-1 check3 radio2 option4"><img src="img/img-4.jpg" alt="Image 4"></li>
				<li class="mix color-1 check1 radio3 option2"><img src="img/img-5.jpg" alt="Image 5"></li>
				<li class="mix color-2 check2 radio3 option3"><img src="img/img-6.jpg" alt="Image 6"></li>
				<li class="mix color-2 check2 radio2 option1"><img src="img/img-7.jpg" alt="Image 7"></li>
				<li class="mix color-1 check1 radio3 option4"><img src="img/img-8.jpg" alt="Image 8"></li>
				<li class="mix color-2 check1 radio2 option3"><img src="img/img-9.jpg" alt="Image 9"></li>
				<li class="mix color-1 check3 radio2 option4"><img src="img/img-10.jpg" alt="Image 10"></li>
				<li class="mix color-1 check3 radio3 option2"><img src="img/img-11.jpg" alt="Image 11"></li>
				<li class="mix color-2 check1 radio3 option1"><img src="img/img-12.jpg" alt="Image 12"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>-->
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Editions</h4>

					<ul class="cd-filter-content cd-filters list" style="list-style-type: none ;">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">1st</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">2nd</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">3rd</label>
						</li>
					</ul> 
				</div> 
				<div class="cd-filter-block">
					<h4>Authors</h4>

					<ul class="cd-filter-content cd-filters list" style="list-style-type: none ;">
						<li>
							<input class="filter" data-filter=".check4" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox4">ABC</label>
						</li>

						<li>
							<input class="filter" data-filter=".check5" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox5">EFG</label>
						</li>

						<li>
							<input class="filter" data-filter=".check6" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox6">XYZ</label>
						</li>
					</ul> 
				</div> 
				<div class="cd-filter-block">
					<h4>Select</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an option</option>
								<option value=".option1">Option 1</option>
								<option value=".option2">Option 2</option>
								<option value=".option3">Option 3</option>
								<option value=".option4">Option 4</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Radio buttons</h4>

					<ul class="cd-filter-content cd-filters list" style="list-style-type: none ;">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Choice 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Choice 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close"><i class="fa fa-times" aria-hidden="true"></i></a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger"><img src="filter.png" height="55%" width="4.5%" style="padding: 5px;">Filters</a>
	</main> <!-- cd-main-content -->
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
    </div >
</body>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
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

</html>