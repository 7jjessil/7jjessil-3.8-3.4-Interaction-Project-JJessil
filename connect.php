<?php

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

	//	Database Connection...
	$conn = new mysqli('localhost', '_JJessil', 'UTexBXIdTb68Iwan', 'JJessil_13DIT_Safari_Trip_Advisory');
	if($conn->connect_error){
			die('Connection Failed : '. $conn->connect_error);
	}
		else{
		
		$result = $conn->prepare("insert into PHP_Contact_Form(name, email, message)
			values(?, ?, ?)");
		$result->bind_param("sss",$name, $email, $message);
		$result->execute();
		echo "Submission sucessful, thank you we will be in contact with you soon.";
		$result->close();
		$conn->close();
		}
	
?>