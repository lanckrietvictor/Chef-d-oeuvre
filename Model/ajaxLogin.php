<?php

$_SESSION["username"] = $_POST["username"];

include "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];

$username = str_replace(' ','',$username);
$password = str_replace(' ','',$password);

$check = $pdo->query("SELECT * FROM Users");
$check_usernames = $check->fetchAll(PDO::FETCH_ASSOC);

$i = 0;
$length = count($check_usernames);

foreach ($check_usernames as $key => $value) {
	if($value["username"]==$username) {
		if($value["password"]==$password) {
			$username = $pdo->quote($username);
			$status = "UPDATE Users SET Available = 1 WHERE username = $username";
			$pdo->prepare($status)->execute();
      header('Location: index.php?admin=success');
			break;
		}
		elseif($value["password"]!=$password){
			echo "Wrong password, try again.";
			break;
		}
	}
	else {
		$i++;
	}
}

if($i == $length) {
	echo "Username does not exist, try again.";
}

?>
