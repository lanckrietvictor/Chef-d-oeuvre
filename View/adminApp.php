<?php

require_once 'Model/connection.php';


if(isset($_POST["add"])){
  stock($pdo);
  echo $_POST["name"];
}

function stock($pdo) {

  /*$sth = $pdo->query("
  SELECT name_app
  FROM homepage");
  $apps2 = $sth->fetchAll(PDO::FETCH_ASSOC);*/


  $name = $pdo->quote($_POST["name"]);
  $description = $pdo->quote($_POST["description"]);
  $logo = $pdo->quote("View/Pics/".$_POST["logo"]);
  $usage = $pdo->quote($_POST["usage"]);

  $sql = "INSERT INTO homepage (name_app, description, img_path, usages) VALUES ($name, $description, $logo, $usage)";

  echo $sql;

  $pdo->prepare($sql)->execute();
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AIP</title>
  </head>
  <body>
    <h1>Here you can add a new app to the site!</h1>
    <form action="index.php?admin=addApp" method="post">
      <label>Name of the app: </label>
      <input required type="text" name="name" >

      <br>
      <br>
      <label>Description of the app: </label>
      <textarea required name="description" rows="8" cols="80" id="descriptionArea"></textarea>

      <br>
      <br>
      <label>Logo of the app (please use a high quality png): </label>
      <input required type="file" name="logo" accept="image/*">

      <br>
      <br>
      <label>Usage of the app: </label>
      <select required name="usage">
        <option value=""><i>Make your choice</i></option>
        <option value="personal">Personal</option>
        <option value="personal">Professional</option>
        <option value="personal">Business</option>
      </select>

      <br>
      <br>
      <input required type="submit" name="add" value="Add">
    </form>
  </body>
</html>
