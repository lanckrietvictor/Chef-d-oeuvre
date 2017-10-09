<?php

require_once "connection.php";
$sth = $pdo->query("
SELECT *
FROM homepage
WHERE name_app = '".$_GET["action"]."'");
$specificApp = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
