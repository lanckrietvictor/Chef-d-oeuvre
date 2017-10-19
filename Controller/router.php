<?php

/*!!!!!!!!!!!!!!!!!! ADMIN !!!!!!!!!!!!!!!!!!!!!!*/

if (isset($_POST["username"])) {
  require_once "Model/ajaxLogin.php";
}
if (isset($_POST["deconnect"])) {
  require_once "View/adminHome.php";
  require_once 'Model/adminHomeData.php';
}

if(isset($_GET["admin"])){
  if($_GET["admin"]==""){
  require_once 'View/loginAdmin.php';
  } if($_GET["admin"]=="success" && isset($_SESSION["username"])){
    require_once 'View/adminHome.php';
  } elseif ($_GET["admin"]=="blog" && isset($_SESSION["username"])) {
    require_once 'View/adminBlog.php';
    require_once 'Model/addArticle.php';
  } elseif ($_GET["admin"]=="addApp" && isset($_SESSION["username"])) {
    require_once 'View/adminApp.php';
    require_once 'Model/addApp.php';
  } else {
    require_once 'View/loginAdmin.php';
  }
}

/*!!!!!!!!!!!!!!!!!! USER SIDE !!!!!!!!!!!!!!!!!!!!!!*/

elseif (empty($_GET["admin"])) {

require_once 'View/header.php';

if (empty($_GET) && !isset($_POST['username']) && !isset($_POST['deconnect'])) {
  require_once 'Model/homepageData.php';
  require_once 'View/homepage.php';
}

if(!empty($_GET["action"])){
  require_once 'Model/specificAppData.php';
  foreach ($specificApp as $key => $value) {
    if($_GET["action"]==$value['name_app']) {
      require_once "View/specificApp.php";
      break;
    }
  }
}

if(!empty($_GET["page"])){
  if($_GET["page"]=="blog"){
    require_once 'Model/blogGeneralData.php';
    require_once 'View/blog.php';
  } else if($_GET["page"]=="contact"){
    require_once 'View/contact.php';
  } else if($_GET["page"]=="about"){
    require_once 'View/about.php';
  }
}

require_once 'View/footer.php';

}

?>
