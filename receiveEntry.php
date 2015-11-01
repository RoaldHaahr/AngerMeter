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

session_start();
if(!empty($_SESSION["userID"])) {
	$sql = "INSERT INTO entrytbl (userID, entryDate, level, cause, resolve, reflection) VALUES (:userID, :entryDate, :level, :cause, :resolve, :reflection)";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(":userID", $_SESSION["userID"]);
		$st->bindValue(":entryDate", date("F j, Y"));
		$st->bindValue(":level", $_POST["angerLevel"], PDO::PARAM_STR);
		$st->bindValue(":cause", $_POST["angerCause"], PDO::PARAM_STR);
		$st->bindValue(":resolve", $_POST["angerResolve"], PDO::PARAM_STR);
		$st->bindValue(":reflection", $_POST["angerReflection"], PDO::PARAM_STR);
		$st->execute();
	} catch (PDOException $e) {
		echo "Server Error - try again!".$e->getMessage();
	}

	if ($e=="") {
		echo 'pass';
	} else {
		echo $e->getMessage();
	};
}

$conn=null; //disconnect to server
?>