<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/about.css">
</head>
<body>

<?php include 'header.php'; ?>


     <div class="heading">
        <h3>About Us</h3>
        <p> <a href="home.php">home</a> / about </p>
     </div>
    <section class="about">

        <div class="flex">
     
           <div class="image">
              <img src="img/about-img.jpg" alt="">
           </div>
     
           <div class="content">
              <h3>Why Choose us?</h3>
              <p>Discover why we're your top choice for anime books. From curated selections to exceptional service, we're here to bring your favorite stories to life. Learn more about us and get in touch today!</p>
              <p>Discover a world of unforgettable adventures and vibrant characters. Explore new dimensions in storytelling!</p>
              <a href="about.html" class="btn">read more</a>
              <a href="contact.html" class="btn">Contact us </a>
           </div>
     
        </div>
     
    </section>

    <section class="reviews">
    
       <h1 class="title">client's reviews</h1>
    
       <div class="box-container">
    
          <div class="box">
             <img src="img/pic-1.png" alt="">
             <p>Great service and fast delivery! The books arrived well-packaged and in pristine condition. Definitely my new favorite place to shop for anime reads.</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>john deo</h3>
          </div>
    
          <div class="box">
             <img src="img/pic-2.png" alt="">
             <p>Impressive selection of titles! They have everything from popular series to rare finds. Perfect for any anime fan looking to expand their collection.</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Emma Smith</h3>
          </div>
    
          <div class="box">
             <img src="img/pic-3.png" alt="">
             <p>Easy-to-use website with clear categories and recommendations. Finding my favorite manga was a breeze. Highly recommend this site!</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Ethan Kim</h3>
          </div>
    
          <div class="box">
             <img src="img/pic-4.png" alt="">
             <p> The customer support team was incredibly helpful. They answered all my questions promptly and guided me through the ordering process.</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Olivia Tanaka</h3>
          </div>
    
          <div class="box">
             <img src="img/pic-5.png" alt="">
             <p>I love the curated collections! It's evident they care about quality and storytelling. Each purchase feels like a treasure.</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Noah Patel</h3>
          </div>
    
          <div class="box">
             <img src="img/pic-6.png" alt="">
             <p>Their reviews and ratings helped me discover new series I hadn't heard of before. Now I'm hooked! Can't wait to explore more.</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Mia Johnson</h3>
          </div>
    
       </div>
    
    </section>
    
    <section class="authors">
    
       <h1 class="title">greate authors</h1>
    
       <div class="box-container">
    
          <div class="box">
             <img src="img/a1.jpeg" alt="">
             <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
             </div>
             <h3>Eiichiro Oda</h3>
          </div>
    
          <div class="box">
             <img src="img/a2.jpeg" alt="">
             <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
             </div>
             <h3>Hajime Isayama</h3>
          </div>
    
          <div class="box">
             <img src="img/a3.jpeg" alt="">
             <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
             </div>
             <h3>Kentaro Miura</h3>
          </div>
    
          <div class="box">
             <img src="img/a4.jpeg" alt="">
             <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
             </div>
             <h3>Hiromu Arakawa</h3>
          </div>
    
          <div class="box">
             <img src="img/a5.jpeg" alt="">
             <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
             </div>
             <h3>Tite Kubo</h3>
          </div>
    
          <div class="box">
             <img src="img/a6.jpeg" alt="">
             <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
             </div>
             <h3>Masashi Kishimoto </h3>
          </div>
    
       </div>
    
    </section>




   <section class="footer">

        <div class="box-container">
     
           <div class="box">
              <h3>quick links</h3>
              <a href="home.html">Home</a>
              <a href="about.html">About</a>
              <a href="shop.html">Shop</a>
              <a href="contact.html">Contact</a>
           </div>
     
           <div class="box">
              <h3>extra links</h3>
              <a href="login.html">Login</a>
              <a href="register.html">Register</a>
              <a href="cart.html">Cart</a>
              <a href="search_page.html">Search</a>
           </div>
     
           <div class="box">
              <h3>contact info</h3>
              <p> <i class="fas fa-phone"></i> +94-710803028 </p>
              <p> <i class="fas fa-phone"></i> +94-787905486 </p>
              <p> <i class="fas fa-envelope"></i> yasirunisal@gmail.com </p>
              <p> <i class="fas fa-map-marker-alt"></i> Colombo, Sri Lanka - 400104 </p>
           </div>
     
           <div class="box">
              <h3>follow us</h3>
              <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
              <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
              <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
              <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
           </div>
     
        </div>
     
        <p class="credit"> &copy; copyright by <span>Yasiru Nisal</span> </p>
     
   </section>

   <script src="js/script.js"></script>
   
</body>
</html>
