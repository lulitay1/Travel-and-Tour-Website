 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--  meta http-equiv="X-UA-Compatible" content="IE-edge"   -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> book</title>

<!--  swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

<!-- font awesome cdn link    -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css ">


<!-- custom style css link -->
<link rel="stylesheet" href="style.css">




</head>

<body>

<!-- Header section starts  -->
<section class="header">
    <a href="home.php"  class="logo">TRAVEL ETHIOPIA.</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
        
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header section ends  -->

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
<h1>Book now</h1>
</div>



<!--     booking section starts   -->


<section class="booking">
    <h1 class="heading-title">book your visit to Ethiopia!</h1>
<form action="book_form.php" method="post" class="book-form">
    <div class="flex">
    <div class="inputBox">
    <span>name :</span>
<input type="text" placeholder="enter your name" name="name">
</div>
<div class="inputBox">
    <span>email :</span>
<input type="email" placeholder="enter your email" name="email">
</div>
<div class="inputBox">
    <span>phone :</span>
<input type="number" placeholder="enter your number" name="phone">
</div>
<div class="inputBox">
    <span>address:</span>
<input type="text" placeholder="enter your address" name="address">
</div>
<div class="inputBox">
    <span>where to :</span>
<input type="text" place you want to visit" name="location">
</div>
<div class="inputBox">
    <span>how many:</span>
<input type="number" placeholder="number of guests" name="guests">
</div>
<div class="inputBox">
    <span>arrivals  :</span>
<input type="date"  name="arrivals">
</div>
<div class="inputBox">
    <span>leaving  :</span>
<input type="date"  name="leaving">
</div>
</div>
<input type="submit" value="submit" class="btn" name="send">
</form>
</section>


<!--     booking section ends   -->





<!-- footer section starts   -->
 <section class="footer">
    <div class="box-container">
    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
    </div>

    <div class="box">
        <h3>extralinks</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i>privacy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
       
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3456</a>
        <a href="#"> <i class="fas fa-phone"></i> +333-444-3456</a>
        <a href="#"> <i class="fas fa-envelope"></i>+travelers@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i>  Ethiopia, addisAbaba</a>

</div>

<div class="box">
    <h3>follow us</h3>
    <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
    <a href="#"> <i class="fab fa-twitter-f"></i>twitter</a>
    <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
    <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
</div>

</div>

<div class="credit"> created by <span> mr.web designer of the video redone by .....</span>|All rights reserved! </div>
</section>
<!-- footer section ends  -->






<!--  swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="script.js"></script>
</body>

</html>