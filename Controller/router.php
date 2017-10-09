<?php

require_once 'Model/homepageData.php';

require_once 'View/header.php';

if (empty($_GET)) {
  require_once 'View/homepage.php';
}

if(!empty($_GET["action"])){
  require_once 'Model/specificAppData.php';
  foreach ($apps as $key => $value) {
    if($_GET["action"]==$value['name_app']) {
      require_once "View/specificApp.php";
      break;
    }
  }
}

require_once 'View/footer.php';

?>
