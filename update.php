<?php

  include 'config.php';

  if(isset($_POST['done'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $skill = $_POST['skill'];
    $cv = $_POST['cv'];
    $code = $_POST['code'];
 $q = " update resume set id=$id, name='$name', email='$email', skill='$skill', cv='$cv', code='$code' where id=$id  ";

  $query = mysqli_query($con,$q);

  header('location:home.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto" style="padding: 3px;">
 
  <form method="post" >
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark" >
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

  <label> Name </label>
 <input type="text" name="name" class="form-control"> <br>

  <label> Email </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Skill </label>
 <input type="text" name="skill" class="form-control"> <br>
 <label> CV Link </label>
 <input type="text" name="cv" class="form-control"> <br>
 <label> Code </label>
 <input type="text" name="code" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>