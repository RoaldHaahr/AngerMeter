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
	$sql = "SELECT userID, entryDate, level, cause, resolve, reflection FROM entrytbl WHERE userID = :userID";

	try {
		$st = $conn->prepare($sql);
		$st->bindValue(":userID", $_SESSION["userID"]);
		$st->execute();
		$rows = $st->fetchAll();
	} catch (PDOException $e) {
		echo "Server Error - try again!".$e->getMessage();
	}

	foreach($rows as $row) {

		if($row['level'] == 1) {
			$level = "Irritated";
		} else if($row['level'] == 2) {
			$level = "Annoyed";
		} else if($row['level'] == 3) {
			$level = "Frustrated";
		} else if($row['level'] == 4) {
			$level = "Angry";
		} else if($row['level'] == 5) {
			$level = "Furious";
		} else if($row['level'] == 6) {
			$level = "Explosive";
		}

		echo '<div data-role="collapsible" class="entry-bg-' . $row['level'] . '">'
				. '<h1>' . $row['entryDate'] . '</h1>'
				. '<div data-controltype="textblock">' . '<h4>Level</h4>'
				. '<p>' . $level . '</p>' . '</div>'
				. '<div data-controltype="textblock">' . '<h4>Cause</h4>'
				. '<p>' . $row['cause'] . '</p>' . '</div>'
				. '<div data-controltype="textblock">' . '<h4>Resolve</h4>'
				. '<p>' . $row['resolve'] . '</p>' . '</div>'
				. '<div data-controltype="textblock">' . '<h4>Reflection</h4>'
				. '<p>' . $row['reflection'] . '</p>' . '</div>' .
			  '</div>';
	}

} else {
	echo '<p>Please login to see your data</p>';
}

$conn=null; //disconnect to server
?>