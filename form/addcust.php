<?php
$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'bank');

if(isset($_POST['addcust']))
{	 
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$mobileno = $_POST['mobileno'];
	$adharno = $_POST['adharno'];
	$dob = $_POST['dob'];
	$accno = $_POST['accno'];
	$balance = $_POST['balance'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];

	$query = "INSERT INTO customer(
	firstname,middlename,lastname,email,mobileno,adharno,dob,accno,balance,address,city,gender) VALUES ('$firstname','$middlename','$lastname','$email','$mobileno','$adharno','$dob','$accno','$balance','$address','$city','$gender')";

	$sql = mysqli_query($conn,$query);
	if($sql)
	{
		echo '<script> alert("Data Saved"); </script>';
     header('location: customerlist.php'); 

	}
	else
	{
		echo '<script> alert("Data Not Saved"); </script>';
	}
}
// if (isset($_POST['removeC'])) {
// 	$c_id = $_POST['accno'];
// 	$query = "DELETE FROM customer WHERE accno='$accno'";
// 	$sql = mysqli_query($conn,$query);
// 	if ($sql) {
// 		echo '<script> alert("Data Deleted"); </script>';
// 	}
// 	else
// 	{
// 		echo '<script> alert("Data Not Deleted"); </script>';
// 	}
// }

?>
