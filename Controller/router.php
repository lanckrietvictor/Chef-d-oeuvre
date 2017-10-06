<?php

require_once 'Model/homepageData.php';

require_once 'View/header.php';

if (empty($_GET)) {
  require_once 'View/homepage.php';
}

if(!empty($_GET)){
  foreach ($apps as $key => $value) {
    if($_GET["action"]==$value['name_app']) {
      include $_GET["action"].".php";
      break;
    }
  }
}

require_once 'View/footer.php';

?>
