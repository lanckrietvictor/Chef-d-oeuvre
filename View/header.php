<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="View/CSS/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="View/CSS/style.css">
    <title>AIP</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 navbar">
        <div class="row">
        <div class="col-xs-6 col-sm-6">
          <a href="index.php">
          <img class="img-responsive" src="View/Pics/1_Primary_logo_on_transparent_249x69.png" alt="Logo AIP">
          </a>
        </div>
        <div class="col-xs-1 col-sm-1">

        </div>
        <div class="col-xs-5 col-sm-5" id="signIn">
          <a href="index.php?admin=" class="link">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            Sign in
          </a>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 navbar">
        <div id="toolsFor" class="row">
          <div class="col-xs-3 col-sm-3">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="dropdown" id="bottom">
                  <p class="dropbtn">
                    Used for <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </p>
                  <div class="dropdown-content">
                    <a href="#">All</a>
                    <br />
                    <a href="#">Personal use</a>
                    <a href="#">Professional use</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-3 col-sm-3">
            <a href="index.php?page=blog" class="link">
              <p>Blog</p>
            </a>
          </div>
          <div class="col-xs-3 col-sm-3">
            <a href="index.php?page=about" class="link">
              <p>About us</p>
            </a>
          </div>
          <div class="col-xs-3 col-sm-3">
            <a href="index.php?page=contact" class="link">
              <p>Contact</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 navbar">
        <input type="text" name="search" placeholder="Search" id="search"/>
      </div>
    </div>
