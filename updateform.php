<?php
include 'dbconnect.php';
     
       session_start();
        if (isset($_POST['Update'])) {
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
                      echo"<script>alert('Item Not Updated')</script>";                  
                    }
                    else
                    {
                       $count=count($_SESSION['profile']);
                  $_SESSION['profile'][$count]=array(/*'ID'=>$_POST["ID"],*/'Title'=>$_POST["title"],'price'=>$_POST["price"]);    
                 // print_r($_SESSION['profile']);

                   $sql = "INSERT INTO `product_detail` (`Title`, `Author`, `Publisher`, `Edition`, `Type`, `price`, `BookDescription`) VALUES ('$title', '$author', '$publisher', '$edition', '$type', '$price', '$BookDescription');";
                   $result =$conn->query( $sql);
                if($result == TRUE){
                   echo"<script>alert('Item Updated')</script>";
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
                   echo"<script>alert('Item Updated')</script>";
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


	<title>Update form</title>

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
        <li><a href="whishlist.php">Wishlist</a></li>
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


  <!--Main Component-->


<div class="container">

 <div id="form">
<h1>Update Details</h1><br>
 <form  method="POST">
 	
    <div class="form-group"><i class="fas fa-check"></i>
      <label ><h4>Title</h4></label>
      <input type="text" class="form-control" name="title" placeholder="Enter Book Title" value="">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6"><i class="fas fa-pen-nib fa-1x"></i>
      <label ><h4>Author Name</h4></label>
      <input type="text" name="author" class="form-control" placeholder="Enter Author Name" value="">
    </div>
    <div class="form-group col-md-6"><i class="fas fa-user-tie"></i>
      <label ><h4>Publisher Name</h4></label>
      <input type="text" name="publisher" class="form-control" placeholder="Enter Publisher Name" value="">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4"><i class="fas fa-bookmark"></i>
      <label><h4>Edition</h4></label>
      <input type="text" name="edition" class="form-control" placeholder="Enter Edition Name" value="">
    </div>
    <div class="form-group col-md-4"><i class="fas fa-graduation-cap"></i>
      <label ><h4>Semester</h4></label>
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
    <div class="form-group col-md-4"><i class="fas fa-clipboard-list"></i>
      <label><h4>Type</h4></label>
      <select class="custom-select" name="category">
        <option selected > Select type</option>
        <option value="PDF"> PDF </option>
        <option value="Books"> Books </option>
      </select>
    </div>
  </div> 

  <div class="form-row">
    <div class="form-group col-md-3"><i class="fas fa-rupee-sign"></i>
    <label><h4>Price</h4></label>
      <input type="text" class="form-control" name="price" placeholder="Enter Price" value="">
    </div>
    
  </div>
   <div class="form-group"><i class="fas fa-info"></i>
      <label><h4>Book Description</h4></label>
      <input type="text" class="form-control" name="description" placeholder="What is the book about?" value=""><br>
   </div>
  <div class="row justify-content-around">
  
  <button type="submit" name="done" class="btn btn-outline-success"  style =" border-radius:2rem;" ><a href="Profile.php">Update !</a>

</div>
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

</body>
</html>