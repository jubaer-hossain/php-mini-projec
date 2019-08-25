<?php

include 'config.php';

$id = $_GET['id'];

$q = " DELETE FROM `resume` WHERE id = $id ";

mysqli_query($con, $q);

header('location:home.php');

?>