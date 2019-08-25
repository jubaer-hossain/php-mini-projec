<?php 
session_start();
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6">
			<h2>Login</h2> <br>
			<form action="validation.php" method="post">
				<div class="form-group">

					<label><b>Email</b></label>
					<input type="text" name="email" class="form-control" placeholder="Email" required>
				</div>
				<div class="form-group">

					<label><b>Password</b></label>
					<input type="Password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary"> Login </button>

			</form>
		</div>
    <div class="col-md-6">
			<h2>Registration</h2> <br>
			<form action="register.php" method="post">
				<div class="form-group">

					<label><b>Full Name</b></label>
					<input type="text" name="fullname" class="form-control" placeholder="Enter Fullname" required>
				</div>
                <div class="form-group">

					<label><b>Email</b></label>
					<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
				</div>

				<div class="form-group">

					<label><b>Password</b></label>
					<input type="Password" name="password" class="form-control" placeholder="Create Password" required>
				</div>
                
				<button type="submit" class="btn btn-primary"> Register Now </button>

			</form>
		</div>


    </div>

		</div>
	</div>

</body>
</html>
