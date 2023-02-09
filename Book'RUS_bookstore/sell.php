<?php
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   	header('location:login.php');
}

if(isset($_POST['send'])){

	$title = $_POST['title'];
	$creator = $_POST['author'];
	$picture = $_POST['image'];
	$seller_name = $_POST['seller_name'];
	$seller_email = $_POST['seller_email'];
	$seller_phonenumber = $_POST['seller_phonenumber'];
	$book_condition = $_POST['book_condition'];
	$cost = $_POST['price'];

	$select_sell = mysqli_query($conn, "SELECT * FROM `sell` WHERE title = '$title' AND writer = '$author' AND picture = '$image' AND seller_name = '$seller_name' AND seller_email = '$seller_email' AND seller_phonenumber = '$seller_phonenumber' AND book_condition = '$book_condition' AND cost = '$price'") or die('query failed');

	if (mysqli_num_rows($select_sell) > 0) {
		$message[] = "Your book has alredy been effectively recorded!";
	}else{
		mysqli_query($conn, "INSERT INTO `sell`(user_id, title, writer, picture, seller_name, seller_email, seller_phonenumber, book_condition, price) VALUES('$user_id', '$title', '$author', '$image', '$seller_name', '$seller_email', '$seller_phonenumber','$book_condition', '$price')") or die('query failed');
		$message[] = "Your book has alredy been effectively recorded!";
	}


}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>sell</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sell</h3>
   <p> <a href="home.php">Home</a> / sell </p>
</div>

<section class="contact">

   <form action="" method="post">
      <input type="text" name="title" required placeholder="enter the book title" class="box">
      <input type="text" name="writer" required placeholder="enter the book author" class="box">
      <input type="text" name="Seller Name" required placeholder="Seller Name" class="box">
      <input type="text" name="Seller Email" required placeholder="Seller Email" class="box">
      <input type="number" name="Seller phonenumber" required placeholder="seller phonenumber" class="box">
      <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
      <input type="text" name="Book Conditions" required placeholder="Book-Conditions" class="box">
      <input type="number" name="Cost" required placeholder="price" class="box">
      <input type="submit" value="Submit" name="send" class="btn">
   </form>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
