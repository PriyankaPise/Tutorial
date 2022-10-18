<?php 

// $session['admin_id'] = $admin_id;
include('../database/config.php');
// session_start();
if (isset($_POST['adminlogin'])) {
	

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "Login Successfully";
		header('location:../employee/emp.php'); 

	}
	else{
		echo "Login failed. Invalid username or Password";
	}
}
if (isset($_POST['emplogin'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM employee WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "Employee Login Successfully";
		header('location:../form/cust.php');
	}
	else{
		echo "Login failed. Invalid username or Password";
	}
}
?>