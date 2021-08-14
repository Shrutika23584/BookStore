<?php
 include 'dbconnect.php';
     
       session_start();
        if (isset($_POST['done'])) {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $publisher = $_POST["publisher"];
        $edition = $_POST["edition"];
        $type = $_POST["type"];
        $price = $_POST["price"];
        $BookDescription = $_POST["BookDescription"]; 

       //$SoldBy = $_SESSION['ename'];
       

       
                if(isset($_SESSION["profile"])){
                    $myitems=array_column($_SESSION['profile'], 'Title');
                    if (in_array($_POST["title"],$myitems)) {
                      echo"<script>alert('Item ALready Added')</script>";                  
                    }
                    else
                    {
                       $count=count($_SESSION['profile']);
                  $_SESSION['profile'][$count]=array(/*'ID'=>$_POST["ID"],*/'Title'=>$_POST["title"],'price'=>$_POST["price"]);    
                 // print_r($_SESSION['profile']);

                   $sql = "INSERT INTO `product_detail` (`Title`, `Author`, `Publisher`, `Edition`, `Type`, `price`, `BookDescription`) VALUES ('$title', '$author', '$publisher', '$edition', '$type', '$price', '$BookDescription');";
                   $result =$conn->query( $sql);
                if($result == TRUE){
                   echo"<script>alert('Item  Added')</script>";
                }
                else{
                    echo "Error:". $sql . "<br>". $conn->error;
                }
                  
                }


                }
                  
                else  
                {  
                    $_SESSION['profile'][0]=array(/*'ID'=>$_POST["ID"],*/'Title'=>$_POST["title"],'Price'=>$_POST["price"]);  
                    // print_r($_SESSION['profile']); 
                     $sql = "INSERT INTO `product_detail` (`Title`, `Author`, `Publisher`, `Edition`, `Type`, `price`, `BookDescription`) VALUES ('$title', '$author', '$publisher', '$edition', '$type', '$price', '$BookDescription');";
                   $result =$conn->query( $sql);
                if($result == TRUE){
                   echo"<script>alert('Item  Added')</script>";
                }
                else{
                    echo "Error:". $sql . "<br>". $conn->error;
                }

                }   

                }


               
        
      

?>

<!DOCTYPE html>
<html>
<head>


	<title>Product Details form</title>

  <script src="https://kit.fontawesome.com/74e6fadba6.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap(main).css">
  <link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="pdform.css">

</head>
<body>

  <!--NavBar-->

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
      <li><a href="cart.php">Cart</a></li>
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


   <!--Main Component-->

<div class="container">
 <div id="form">
 <form method="post" action="" >
  <h1>Book Details</h1><br>
    <div class="form-group"><i class="fas fa-check"></i>
      <label for="inputEmail4">Title</label>
      <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Enter Book Title" required>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6"><i class="fas fa-pen-nib fa-1x"></i>
      <label for="inputEmail4">Author Name</label>
      <input type="text" name="author" class="form-control" id="inputEmail4" placeholder="Enter Author Name" required>
    </div>
    <div class="form-group col-md-6"><i class="fas fa-user-tie"></i>
      <label for="inputEmail4">Publisher Name</label>
      <input type="text" name="publisher" class="form-control" id="inputEmail4" placeholder="Enter Publisher Name" required>
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6"><i class="fas fa-bookmark"></i>
      <label for="inputEmail4">Edition</label>
      <input type="text" name="edition" class="form-control" id="inputEmail4" placeholder="Enter Edition" required>
    </div>
    <div class="form-group col-md-4"><i class="fas fa-graduation-cap"></i>
      <label for="inputEmail4"><h4>Semester</h4></label>
      <select class="custom-select" >
        <option selected> Select Semester</option>
        <option value="PDF"> 1 </option>
        <option value="Books"> 2 </option>
        <option value="Books"> 3 </option>
        <option value="Books"> 4 </option>
        <option value="Books"> 5 </option>
        <option value="Books"> 6 </option>
        <option value="Books"> 7 </option>
        <option value="Books"> 8 </option>
      </select>
    </div>
    <div class="form-group col-md-6"><i class="fas fa-clipboard-list"></i>
      <label for="inputEmail4">Type</label>
      <select class="custom-select" name="type" required>
        <option selected> Select type</option>
        <option value="PDF"> PDF </option>
        <option value="Books"> Books </option>

      </select>
    </div>
  </div> 

  <div class="form-row">
    <div class="form-group col-md-3"><i class="fas fa-rupee-sign"></i>
    <label for="inputCity">Price</label>
      <input type="text" name="price" class="form-control" id="inputCity" placeholder="Enter Price" required>
    </div>
    
  </div>
   <div class="form-group"><i class="fas fa-info"></i>
      <label for="inputAddress2">Book Description</label>
      <input type="text" name="BookDescription" class="form-control" id="inputAddress2" placeholder="What is the book about?" required><br>
   </div>
  
   <div class="row justify-content-around">
  
  <button type="submit" name="done" class="btn btn-outline-success"  style =" border-radius:2rem;" onclick="window.location.href='Profile.php' ">Submit</button>

</div>
</form>
</div>
</div>

<script>
// Name of the file appears on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
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
</html>