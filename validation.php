<?php
session_start();
require_once "config.php";

$pass = $_POST['password'];
$email = $_POST['email'];


$s = "select * from users where email='$email' && password='$pass'";

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['email']=$email;
	header('location:home.php');
}
else{
	header('loacation:index.php');
	mysqli_query($con, $reg);
	echo "Login UnSuccessful";
}


?>