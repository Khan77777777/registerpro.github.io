<?php 
session_start();
header('location:login.php');
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
	echo "Already Registered";
}else{
	$qy = "insert into signin(name, password) values('$name','$pass')";
	mysqli_query($con,$qy); 
}
?>