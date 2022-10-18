<?php
// require_once("navadmin.php");
include('../navbar.php');
?>
<html>
<head>
	<title>Employee Reports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	
</head>
<body>
	<br><br>
	<div class="container-fuild">
		<div class="card">
			<div class="card-body">
				<center><h3>CUSTOMER REPORT</h3></center>

				<?php 
				$conn = mysqli_connect('localhost','root','');
				$db = mysqli_select_db($conn,'bank');

				$query = "SELECT * FROM customer";
				$sql = mysqli_query($conn,$query);
				?>
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">FIRST NAME</th>
							<th scope="col">MIDDLE NAME</th>
							<th scope="col">LAST NAME</th>
							<th scope="col">EMAIL-ID</th>
							<th scope="col">MOBILE NO</th>
							<th scope="col">ADHAR NO</th>
							<th scope="col">DOB</th>
							<th scope="col">ACCOUNT NO</th>
							<th scope="col">BALANCE</th>
							<th scope="col">ADDRESS</th>
							<th scope="col">CITY</th>
							<th scope="col">GENDER</th>


						</tr>
					</thead>
					<?php
					if($sql)
					{
						foreach($sql as $row)
						{
							?>
							<tbody>
								<tr>
									<td> <?php echo $row['c_id']; ?> </td>
									<td> <?php echo $row['firstname']; ?> </td>
									<td> <?php echo $row['middlename']; ?> </td>
									<td> <?php echo $row['lastname']; ?> </td>
									<td> <?php echo $row['email']; ?> </td>
									<td> <?php echo $row['mobileno']; ?> </td>
									<td> <?php echo $row['adharno'];?></td>
									<td> <?php echo $row['dob'];?></td>
									<td> <?php echo $row['accno'];?></td>
									<td> <?php echo $row['balance']; ?> </td>
									<td> <?php echo $row['address'];?></td>
									<td> <?php echo $row['city']; ?> </td>
									<td> <?php echo $row['gender']; ?> </td>

								</tr>
							</tbody>
							<?php
						}
					}
					else 	
					{
						echo "No record found";
					}
					?>
				</table>
			</div>
		</div>
	</div>

</body>
</html>