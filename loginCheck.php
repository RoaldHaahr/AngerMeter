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

	$sql="SELECT count(*) as success, id FROM logintbl WHERE username=:username AND password=:password";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(":username",$_POST["user"], PDO::PARAM_STR);
		$st->bindValue(":password",$_POST["pass"], PDO::PARAM_STR);
		$st->execute();
		$row=$st->fetch();          
	} catch (PDOException $e) {
		echo "Server Error - try again!".$e->getMessage();
	}

	if ($e=="" and $row["success"]==1) {
		session_start(); 
		$_SESSION["loggedOn"]=1;
		$_SESSION["userID"]=$row["id"]; 
		echo 'pass';
	} else {
		echo $e->getMessage();
	};

	$conn=null; //disconnect to server
?>