<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<?php include 'header.php'; ?>

   
    
    <div class="heading">
       <h3>contact us</h3>
       <p> <a href="home.php">home</a> / contact </p>
    </div>
    
    <section class="contact">
    
       <form action="" method="post">
          <h3>say something!</h3>
          <input type="text" name="name" required placeholder="enter your name" class="box">
          <input type="email" name="email" required placeholder="enter your email" class="box">
          <input type="number" name="number" required placeholder="enter your number" class="box">
          <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
          <input type="submit" value="send message" name="send" class="btn">
       </form>
    
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
    </section>

    <script src="js/script.js"></script>

    
    </body>
    </html>