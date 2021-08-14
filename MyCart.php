<?php
	include 'dbconnect.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    if(isset($_POST["delete_item"]))  
    {  
      foreach($_SESSION['cart'] as $key => $value)
      {
        if($value['ename']==$_POST['ename'])
          {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>alert('Item Removed')</script>";
          }
      }     
      
    }   
    if(isset($_POST['order'])) 
  {
  echo"<script>alert('Order Placed!!')</script>"; 
  //header("Location: Receipt.php");
  }   
}
	
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cart.css">
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap(main).css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="cart.css"> <!-- Resource style -->
	<script src="contents.js"></script> <!-- Modernizr -->
  	
 

	<title>My Cart</title>
</head>
<body>
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
      <li><a href="MyCart.php">My Cart</a></li>
      </ul>
    </nav>

    <nav>
     <ul>
      <form action="post" autocomplete="on">
       <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
     </form>
     </ul>
    </nav>
    </header>
<body>
<!----Cart items---->
<form action="" method="post">
	
						
	<div class="row" style="padding: 0px;"> 
	<div class="cart-page col-md-10">
		<table>
			<tr>
				<th style="border-top-left-radius: 5px;">Product</th>
				<th>Remove Item</th>
				<th style="border-top-right-radius: 5px;">SubTotal</th>
				
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="frst.jpg">
						<div>
							<?php
							              $total=0;

							              if(isset($_SESSION["cart"])) 
							              {
							                foreach($_SESSION["cart"] as $key => $value)
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
							
							<!--<input type="hidden" name="Title" value="$value[product]">
							
							<input type="hidden" name="price" value="200">-->
							
							

						</div>
					</div>
				</td>
				<td><button type="submit" class="btn btn-danger btn-sm">Remove</button></td>
				<td>$200.00</td>
				
				
				
			</tr>

		</table>
		
	</div>
	
	


		<div class="total-price col-md-2">
			<table>
				<th colspan="2" style="border-top-left-radius: 5px;border-top-right-radius: 5px;font-weight: 5px;"><h5>Total</h5></th>
				
				<tr>
					<td>Total</td>
					<td>$200</td>

				</tr>
				<tr>
					
					<td><button type="submit" name="update" class="btn btn-outline-success" style =" border-radius:2rem;"><a href="#"></a> PAYMENT ! </button></td>
				</tr>
			</table>

			</form>

			</div>

		</div>
</body>
</html>