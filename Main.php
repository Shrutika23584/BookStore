<?php

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@700&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="bootstrap(main).css">
  <link rel="stylesheet" type="text/css" href="Main.css">
  <title>Home Page</title>
</head>

<body>


  <header>

    <nav>
     <ul>
      <li><a href="#">Home</a></li>
     </ul>
    </nav>

     <nav>
      <ul>
      <li><a href="login.php">Login</a></li>
      <li><a href="Registration.php">Sign up</a></li>
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

  <section class="titles">

   <br><br><br><br><br><br>
   <h1><b>BookADDA</b></h1>
   <br><br><br>
   <h3><b><i>A Go-to spot for getting all your Academic Books !</i></b></h3>
   <br><br><br><br><br><br><br><br><br>
  


  </section>

  <section class="container-boxes">
    <div class="box">

      <div class="icon">
       <p class="fas fa-book fa-4x" style="padding: 20px;"></p>
      </div>
      <div class="text">
        <a href="#">
          <h1>BUY</h1>
          <p>Get Academic books at best price !</p>
        </a>
      </div>

    </div>

    <div class="box">

      <div class="icon">
       <p class="fas fa-handshake fa-4x" style="padding: 20px;"></p>
      </div>
      <div class="text">
        <a href="">
          <h1>RENT</h1>
          <p>Scared for a long term commitment? Rent a Book instead! No Strings Attached!</p>
        </a>
      </div>

    </div>

    <div class="box">

      <div class="icon">
       <p class="fas fa-rupee-sign fa-4x" style="padding: 20px;"></p>
      </div>

      <div class="text">
        <a href="">
          <h1>SELL</h1>
          <p>Want to get rid of past semester books?  Sell them and gain a profit!</p>
        </a>
      </div>

    </div>
  </section>
<br><br><br><br><br><br>
<div class="jumbotron" id="jumbo">
  <center>
    <br><br><br><br>
  <h1 class="display-4"><b>New Collections Update every Month !</b></h1>
  <br>
  <p class="lead"><b><i>Your just a few steps away from getting started ! </i></b></p>
  <br><br><br>
  <p class="lead">
    <a href="Registration.php"><button class="button" style="vertical-align:middle"><span>Lets Go !</span></button></a>
  </p>
  <br><br><br>
<section class="counters">
      <div class="container">
        <div>
          <i class="fas fa-shopping-basket fa-3x"></i>
          <div class="counter" data-target="600">0</div>
          <h3>Books Bought</h3>
        </div>
        <div>
          <i class="fas fa-bookmark fa-3x"></i>
          <div class="counter" data-target="500">0</div>
          <h3>Books Rented</h3>
        </div>
        <div>
          <i class="fas fa-check-circle fa-3x"></i>
          <div class="counter" data-target="600">0</div>
          <h3>Books Sold</h3>
        </div>
      </div>
    </section>
</center>
</div>
<br><br><br><br><br><br><br><br>
<script type="text/javascript">
  const counters = document.querySelectorAll('.counter');
const speed = 50; // The lower the slower

counters.forEach(counter => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;

    // Lower inc to slow and higher to slow
    const inc = target / speed;

    // console.log(inc);
    // console.log(count);

    // Check if target is reached
    if (count < target) {
      // Add inc to count and output in counter
      counter.innerText = count + inc;
      // Call function every ms
      setTimeout(updateCount, 1);
    } else {
      counter.innerText = target;
    }
  };

  updateCount();
});

</script>
</body>

<footer class="row">
<div class="container-fluid col-mg-2 col-sm-2">
<ul><h5>Contact Us</h5>
 <li><fa href="#">+919968452757</fa></li>
 <li><fa href="#">+919248158786</fa></li>
</ul>
</div>
<div class="container-fluid col-mg-2 col-sm-2">
<a href="#"><h5>About Us</h5></a>
</div>
<div class="container-fluid col-mg-2 col-sm-2">
<a href="#"><h5>Privacy Policy</h5></a>
</div>
</footer>


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
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>