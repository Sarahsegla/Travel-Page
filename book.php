<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- swiper css -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <!-- font link -->
    
<link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<!-- styles -->
<link rel="stylesheet" href="style.css" />
<title>Home</title>
</head>
<body>
    <!-- header -->
    <section class="header">
        <a href="home.php" class="carLogo">cars.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="gallery.php">gallery</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
</nav>

<!-- menu bar -->
<div id="menuBtn" class="fas fa-bars"></div>
</section>
    <!-- header end-->
    <div class="heading" style="background:url(images/book.png) no-repeat">
        <h1>book</h1>
</div>


<section class="booking">
<h1 class="headong-title">Book your shoot!</h1>
<form action="book_form.php" method="post" class="book-form" >

<div class="flex">
<div class="inputbox">
<span>name :</span>
<input type="text" placeholder="enter your name" name="name" >
</div>
<div class="inputbox">
<span>email :</span>
<input type="email" placeholder="enter your email" name="email" >
</div>
<div class="inputbox">
<span>phone :</span>
<input type="number" placeholder="enter your phone number" name="phone" >
</div>
<div class="inputbox">
<span>which package :</span>
<input type="text" placeholder="enter your package" name="package" >
</div>
<div class="inputbox">
<span>date :</span>
<input type="date" name="date" >
</div>
</div>
<input type="submit" value="submit" class="btn" name="send">
</form>
</section>











<section class="footer">
    <div class="boxContainer">
        <div class="box">
            <h3>Links</h3>
        <a href="home.php"> <i class="fa fa-caret-right" ></i> home </a>
            <a href="about.php"> <i class="fa fa-caret-right"></i> about </a>
            <a href="package.php"> <i class="fa fa-caret-right"></i> package </a>
            <a href="book.php"> <i class="fa fa-caret-right" ></i> book </a>
</div>

<div class="box">
            <h3>More Links</h3>
            <a href="#"> <i class="fa fa-caret-right" ></i> questions </a>
            <a href="#"> <i class="fa fa-caret-right" ></i> about </a>
            <a href="#"> <i class="fa fa-caret-right" ></i> privacy policy </a>
            <a href="#"> <i class="fa fa-caret-right" ></i> terms of use </a>
</div>

<div class="box">
            <h3>Contact Me</h3>
            <a href="#"> <i class="fa fa-phone"></i>+44 07123456546 </a>
            <a href="#"> <i class="fa fa-phone"></i>+44 07123456546 </a>
            <a href="#"> <i class="fa fa-envelope" ></i> Somebody@gmail.com </a>
            <a href="#"> <i class="fa fa-map" ></i> London, United Kingdom </a>
</div>

<div class="box">
            <h3>Socials</h3>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
</div>
</div>



</section>

<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js" >
    </script>
</body>
</html>