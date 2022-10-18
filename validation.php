
<?php

	$firstnameErr = $lastnameErr = $emailErr = $passwordErr= $mobilenoErr= $adharnoErr= $empidErr= $dobErr=$qualErr= $addressErr= "";
	$firstname = $lastname= $email=$password=$mobileno=$adharno=$empid=$dob=$qual=$address= "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["firstname"])) {
			$firstnameErr = "Name is required";
		} else {
			$firstname = test_input($_POST["firstname"]);
		}
		if (empty($_POST["lastname"])) {
			$lastnamenameErr = "lastname is required";
		} else {
			$lastname = test_input($_POST["lastname"]);
		}
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		 } else {
		 	$email = test_input($_POST["email"]);
		}
		if (empty($_POST["password"])) {
			$passwordErr = "Password is required";
		} else {
			$password = test_input($_POST["password"]);
		}

		if (empty($_POST["mobileno"])) {
			$mobilenoErr = "Mobile no is required";
		} else {
			 $mobileno = test_input($_POST["mobileno"]);
		}
		if (empty($_POST["adharno"])) {
			$adharnoErr = "Email is required";
		} else {
			$adharno = test_input($_POST["adharno"]);
		}
		if (empty($_POST["empid"])) {
			$empidErr = "Employee id is required";
		} else {
			$empid = test_input($_POST["empid"]);
		}
		if (empty($_POST["dob"])) {
			$dobErr = "DOB is required";
		} else {
			$dob = test_input($_POST["dob"]);
		}
		if (empty($_POST["qual"])) {
			$qualErr = "Qualification is required";
		} else {
			$qual = test_input($_POST["qual"]);
		}
		if (empty($_POST["address"])) {
			$addressErr = "address is required";
		} else {
			$address = test_input($_POST["address"]);
		}
		
		// if (empty($_POST["c_address"])) {
		// 	$addressErr = "Address is required";
		// } else {
		// 	$c_address = test_input($_POST["c_address"]);
		// }
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>