<?php
$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'bank');

if(isset($_POST['addemp'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobileno = $_POST['mobileno'];
	$adharno = $_POST['adharno'];
	$empid = $_POST['empid'];
	$dob = $_POST['dob'];
	$qual = $_POST['qual'];
	$address = $_POST['address'];

  

	$query = "INSERT INTO employee(firstname,lastname,email,password,mobileno,adharno,empid,dob,qual,address) VALUES('$firstname','$lastname','$email','$password','$mobileno','$adharno','$empid','$dob','$qual','$address')";

	$sql = mysqli_query($conn,$query);
  if($sql)
  {
    echo '<script> alert("Data Saved"); </script>';
    header('location: emplist.php'); 
  }
  else
  {
   echo '<script> alert("Data Not Saved"); </script>';
 }
}

?>