<div class="container-fluid padding" id="background">
  <div class="row">
    <div class="col-xs-12 col-sm-12">
      <h1 class="appTitle"><?= $specificApp[0]["name_app"] ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12" id="app_article">
      <p><?= $specificApp[0]["app_article"] ?></p>
    </div>
  </div>
  <a href="<?= $specificApp[0]["link"] ?>" target="blank">
    <button class="specificButton" id="left" type="button" name="visit">Visit <?= $specificApp[0]["name_app"] ?></button>
  </a>
  <a href="index.php">
    <button class="specificButton" id="right" type="button" name="discover">Discover more apps!</button>
  </a>
</div>
