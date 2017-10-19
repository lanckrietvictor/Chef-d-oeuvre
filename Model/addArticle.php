<?php

require_once 'Model/connection.php';


if(isset($_POST["addBlog"])){
  stock($pdo);
}

function stock($pdo) {

  $name = $pdo->quote($_POST["name"]);
  $intro = $pdo->quote($_POST["intro"]);
  $picture = $pdo->quote("View/Pics/".$_POST["picture"]);
  $article = $pdo->quote($_POST["article"]);

  $sql = "INSERT INTO blog (nameBlog, intro, img_path, article)    VALUES ($name, $intro, $picture, $article)";

  $pdo->prepare($sql)->execute();
}

 ?>
