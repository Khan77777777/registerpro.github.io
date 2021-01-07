<?php 
session_start();
if(!isset($_SESSION['naam'])){
	header('location:login.php');
}
 
 ?>
 

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 	<h2  class="text-center">Welcome To R.A Software Programmer</h2>
 	<a href="logout.php">Logout</a>
 	</div>
 </body>
 </html>