<?php 
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "Successfull";
}else{
	echo "Not connection";
}

mysqli_select_db($con,'projectdata');
$name = $_POST['user'];
$pass = $_POST['password'];

$qry = "select * from signin where name = name = '$name' && password = '$pass' ";
$result = mysqli_query($con, $qry);
$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['naam'] = $name;
	header('location:home.php');
	
}else{
	header('location:login.php');
}
?>