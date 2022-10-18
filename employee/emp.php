<?php
// require_once("navadmin.php");
include('../navbar.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/emp.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="container emp-container">
		<div class="row">
			<div class="col-md-12 emp-form">
				<h3>Add New Employee</h3>
				<form method="post" action="addemp.php">
					<div class="row">
						<div class="col">
							<label class="form-label1">Firstname</label>
							<input type="text" name="firstname" class="form-control" required>
						</div>
						<div class="col">
							<label class="form-label1">Lastname</label>
							<input type="text" name="lastname" class="form-control" required>
						</div>
						
					</div>
					<div class="row">
						
						<div class="col">
							<label class="form-label1">Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="col">
							<label class="form-label1">Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
					</div>
					<div class="row">
						
			<!-- <div class="col-md-4">
				<label class="form-label">Confirm Password</label>
				<input type="password" name="pwd2" class="form-control" required>
			</div> -->
			<div class="col">
				<label class="form-label1">Mobile</label>
				<input type="number" name="mobileno" class="form-control" required>
			</div>
			<div class="col">
				<label class="form-label1">Aadhar Number</label>
				<input type="number" name="adharno" class="form-control" required>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<label class="form-label1">Employee ID(Don't Edit)</label>
				<input type="number" name="empid" value="<?php echo rand(1000,9999);?>"  class="form-control" required>
			</div>
			<div class="col">
				<label class="form-label1">Date of birth</label>
				<input type="date" name="dob" class="form-control" required>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label class="form-label1">Qualification</label>
				<input type="text" name="qual" class="form-control" required>
			</div>
			<div class="col">
				<label class="form-label1">Address</label>
				<input type="text" name="address" class="form-control" required>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<input type="submit" name="addemp" class="form-control btn btn-success btn-lg">
			</div>
			<div class="col">                                                
				<input type="reset" class="form-control btn btn-outline-danger btn-lg">
			</div>
		</div>
	</form>  
</div>    
</div>
</div>


</body>
</html>