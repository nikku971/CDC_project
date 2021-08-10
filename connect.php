<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
	$Name = $_POST['Name'];
	$codeforces = $_POST['codeforces'];
	$branch= $_POST['branch'];
	$email = $_POST['email'];
	$password = $_POST['p'];
	$rollnumber = $_POST['RN'];
    $Phone = $_POST['phone'];
	// Database connection
	$conn = new mysqli('localhost','root','','oj_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into oa_student(email,Name,rollnumber, branch, codeforces,Phone,password) values(?, ?, ?, ?, ?, ?,?)");
        echo $conn->error;
		$stmt->bind_param("sssssis", $email, $Name, $rollnumber, $branch,$codeforces,$Phone, $password);
        echo $conn->error;
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
        //i used big int in database  for that .. Ok 5 min ..i am on calls ... Ok
	}
?>