<?php

require_once 'Model/connection.php';


if(isset($_POST["add"])){
  stock($pdo);
}

function stock($pdo) {

  $name = $pdo->quote($_POST["name"]);
  $description = $pdo->quote($_POST["description"]);
  $logo = $pdo->quote("View/Pics/".$_POST["logo"]);
  $usage = $pdo->quote($_POST["usage"]);
  $appArticle = $pdo->quote($_POST["appBlog"]);

  $sql = "INSERT INTO homepage (name_app, description, img_path, usages)    VALUES ($name, $description, $logo, $usage)";

  $pdo->prepare($sql)->execute();

  $sth = $pdo->query("
  SELECT id_app
  FROM homepage
  WHERE name_app = $name");
  $nameApp = $sth->fetchAll(PDO::FETCH_ASSOC);

  //print_r($nameApp);
  $id_app = $nameApp[0]["id_app"];

  $sql2 = "INSERT INTO specificApp (id_app, app_article) VALUES ($id_app, $appArticle)";

  $pdo->prepare($sql2)->execute();
}

 ?>
