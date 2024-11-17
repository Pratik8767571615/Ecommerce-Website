<?php
	$firstname= $_POST['first'];
	$lastname= $_POST['last'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$mobile= $_POST['mobile'];
	$gender= $_POST['gender'];

	$conn= new mysqli('localhost', 'root', 'register');
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	} 


?>