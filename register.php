<?php
session_start();

require_once "config.php";

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['fullname'];

$qry = "select * from users where email = '$email'";

$result =  mysqli_query($con, $qry);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "Already registered user";
}
else{
    $reg = "insert into users(fullname, email, password) values('$name', '$email', '$password')";
    mysqli_query($con, $reg);
    echo "Registration successful";
}

?>