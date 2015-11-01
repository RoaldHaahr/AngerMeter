<?php
	$dsn = "mysql:host=198.71.225.58;dbname=angermeter";
	$username="angermeter";
	$password="owt5F5_1";
	$e="";

	try {
		$conn = new PDO($dsn, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "Connection failed: ". $e->getMessage();
	};

	if($_POST["signUpPassword"] == $_POST["repeatSignUpPassword"]) {

		$sql = "INSERT INTO logintbl (username, password) VALUES (:user, :pass)";
		try {
			$st = $conn->prepare($sql);
			$st->bindValue(":user", $_POST["signUpUsername"], PDO::PARAM_STR);
			$st->bindValue(":pass", $_POST["signUpPassword"], PDO::PARAM_STR);
			$st->execute();
		} catch (PDOException $e) {
			echo "Server Error - try again!" . $e->getMessage();
		}

		echo "pass";

	} else {
		echo "The two passwords doesn't match<br />Try again!";
	}

	$conn = null;
	
?>