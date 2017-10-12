<?php

require_once "connection.php";
$sth = $pdo->query("
SELECT homepage.name_app, specificApp.app_article
FROM specificApp
INNER JOIN homepage ON specificApp.id_app = homepage.id_app
WHERE name_app = '".$_GET["action"]."'");
$specificApp = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
