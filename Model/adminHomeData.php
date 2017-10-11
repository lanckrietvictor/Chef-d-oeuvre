<?php

if(isset($_POST["deconnect"])){
	unset($_SESSION["username"]);
  header("Location: /public/Chef-d-oeuvre/index.php");
}

if(!isset($_SESSION["username"])){
	header("Location: /public/Chef-d-oeuvre/index.php?admin=");
}

 ?>
