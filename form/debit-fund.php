<?php
include('../navemp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/cust.css">
</head>
<body>
	<div>
		<center class="m-4"><h3>Debit Funds</h3>

			<form action="" method="post">
				<div class="row">
					<div class="col">
						<div class="input-group input-group-lg">
							<span class="input-group-text" id="inputGroup-sizing-lg">Account No.</span>
							<input type="number" name="accno" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-lg">
						</div>
					</div>
					<div class="col">
						<div class="input-group input-group-lg">
							<span class="input-group-text" id="inputGroup-sizing-lg">Amount (Rs.)</span>
							<input type="number" name="amount" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-lg">
						</div>
					</div>
					
					<div class="col">
						<input type="submit" name="debitfund" class="btn btn-primary btn-lg" value="Debit fund">
					</div>
				</div>                              
			</form>
			<?php
			require_once("../database/config.php");

			if (isset($_POST['debitfund'])) {
				$accno = $_POST['accno'];

				$query="SELECT * FROM customer WHERE accno='$accno'";
				$find = mysqli_query($conn,$query);
				if($result = mysqli_fetch_assoc($find)){
					$amount = $result['balance'] - $_POST['amount'];
					// $amount = $_POST['amount'] + $result['balance'];
					//update balance
					$query = "UPDATE customer SET balance='$amount' WHERE accno='$accno'";
					$result = mysqli_query($conn,$query);
					echo "<script>
					alert('Amount Debited Successfully...!!!')</script>";
				}
				else{
					echo "<script>alert('Customer Not Found!')</script>";
				}

				
			}
			?>
		</center>
	</div>


</body>
</html>