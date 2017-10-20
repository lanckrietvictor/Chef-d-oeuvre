<?php

require_once "connection.php";
$sth = $pdo->query("
SELECT id_blog, nameBlog, intro, img_path, article
FROM blog
WHERE id_blog = '".$_GET["blog"]."'");
$specificBlog = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
