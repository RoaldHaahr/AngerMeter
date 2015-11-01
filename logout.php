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

$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
	setcookie(session_name(), '', time()-86400, '/');
}

session_destroy();
?>
