<?php 
session_start();
?>
<?php
if(isset($_SESSION['admin_id']))
{
	header("location:navbar.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/login.css">

</head>
<body>
	<div class="container login-container">
		<h1>LOGIN PAGE</h1>
		<div class="row">
			<div class="col-md-6 login-form-1">
				<h3>Admin</h3>
				<form method="POST" action="authentication.php">
					<div class="form-group">
						<input type="text" id="username" name="username" class="form-control" placeholder="ENTER USERNAME *" value=""/>
					</div>
					<div class="form-group">
						<input type="password" id="password" name="password" class="form-control" placeholder="ENTER PASSWORD *" value="" />
					</div>
					<div class="form-group">
						<input name="adminlogin" type="submit" class="btnSubmit" value="Login" />
					</div>
				</form>
			</div>
			<!--Employee Login  -->
						<?php
			if(isset($_SESSION['e_id']))
			{
				header("location:navemp.php");
			}
			?>

			<div class="col-md-6 login-form-2">
				<h3>Employee</h3>
				<form method="POST" action="authentication.php">
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="ENTER USERNAME *" value="" />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="ENTER PASSWORD *" value="" />
					</div>
					<div class="form-group">
						<input name="emplogin" type="submit" class="btnSubmit" value="Login" />
					</div>
				</form>
			</div>	
		</div>
	</div>

</body>
</html>