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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/lasse-jensen-84mFDd6bZG4-unsplash.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>
            Books ‘R Us Marketplace enables you to trade amongst other students within the safety and convenience of your university campus. We make it safer easier and cheaper to buy and sell stuff within university. Textbooks, for example, are on average 70% less expensive on Books ‘R Us than new. It takes meer seconds to upload a textbook and meer seconds to find the textbook you need on the Books ‘R US platform.
         </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.7588675661364!2d28.13253131483156!3d-25.975947483540008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956e386390ee2b%3A0xeda7dbcaf82c0fb8!2s319%20Old%20Pretoria%20Rd%2C%20Glen%20Austin%20AH%2C%20Midrand%2C%201685!5e0!3m2!1sen!2sza!4v1656592063085!5m2!1sen!2sza" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>






<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>