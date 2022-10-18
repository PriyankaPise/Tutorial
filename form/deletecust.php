<?php
include('../navemp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/cust.css">

</head>
<body>

	<!--remove customer-->
	<div class="container cust-container">
		<div class="row">
			<div class="col-md-12 cust-form">
				<h3>Delete Customer</h3>
				<form action="" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Account Number" name="accno" aria-label="Recipient's username" aria-describedby="button-addon2"><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button class="btn btn-danger" name="removeC" type="submit" id="button-addon2">DELETED DATA</button>
					</div>
				</form>  
				<?php 
				$conn = mysqli_connect('localhost','root','');
				$db = mysqli_select_db($conn,'bank');

				if (isset($_POST['removeC'])) {
	              // echo $_POST[accno];
					$query = "DELETE FROM customer WHERE accno='$_POST[accno]'";
					// echo "$query";

					$result = mysqli_query($conn,$query);
					if ($result) {
						echo '<script> alert("Customer Data Deleted Successfully");</script>';
					}
				}
				?>

			</div>
		</div>
	</div>


</body>
</html>