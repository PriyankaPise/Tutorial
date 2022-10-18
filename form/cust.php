<?php
include('../navemp.php');
?>
<!DOCTYPE html>

<html>
<head>
	<title>Customer Details</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/cust.css">
</head>
<body>
	<div class="container cust-container">
		<div class="row">
			<div class="col-md-12 cust-form">
				<h3>Add Customer</h3>
				<form method="post" action="addcust.php" >
					<div class="row">
						<div class="col-md-4">
							<label class="form-label1">Firstname</label>
							<input type="text" name="firstname" class="form-control" required>
						</div>
						<div class="col-md-4">
							<label class="form-label1">Middlename</label>
							<input type="text" name="middlename" class="form-control" required>
						</div>
						<div class="col-md-4">
							<label class="form-label1">Lastname</label>
							<input type="text" name="lastname" class="form-control" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label class="form-label1">Email</label>
							<input type="text" name="email" class="form-control" required>
						</div>
						<div class="col-md-4">
							<label class="form-label1">Mobile No</label>
							<input type="text" name="mobileno" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label1">Adhar No</label>
							<input type="number" name="adharno" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<label class="form-label1">DOB</label>
							<input type="date" id="" name="dob" class="form-control" onfocusout="calculateAge()" required>
						</div>
						<div class="col-md-4">
							<label class="form-label1">Account No(Don't Edit)</label>
							<input type="text" name="accno" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label1">Account Balance</label>
							<input type="number" name="balance" value="200" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label class="form-label1">Address</label>
							<input type="text" name="address" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="form-label1">City</label>
							<input type="text" name="city" class="form-control">
						</div>
						<br>
						
						<div class="col-md-4">
							<label class="form-label1">Gender</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" value="Male" name="gender" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">Male</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" value="Female" name="gender" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">Female</label>
							</div>
						</div> 
					</div>
					<div class="row">
						<div class="col-md-4">
							<input type="submit" name="addcust" class="form-control btn btn-success btn-lg">
						</div>
						<div class="col-md-4">                                        <input type="reset" class="form-control btn btn-outline-danger btn-lg">
						</div>
					</div>




				</form>  
			</div>    
		</div>
	</div>


</body>
</html>