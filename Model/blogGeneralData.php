<?php

require_once "connection.php";

$sth = $pdo->query("
SELECT *
FROM blog");
$blog = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
