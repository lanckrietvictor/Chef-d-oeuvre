<?php

require_once "connection.php";

$sth = $pdo->query("
SELECT *
FROM homepage");
$apps = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
