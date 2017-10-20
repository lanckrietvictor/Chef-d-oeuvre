<div class="container-fluid padding" >
  <div class="row">
    <div class="col-xs-12 col-sm-12">
      <h1 class="appTitle"><?= $specificBlog[0]["nameBlog"] ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12">
      <h2 class="aboutSub"><?= $specificBlog[0]["intro"] ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12" id="app_article">
      <p><?= $specificBlog[0]["article"] ?></p>
    </div>
  </div>
  <a href="index.php?page=blog">
    <button class="specificButton" id="center" type="button" name="discover">Discover more articles!</button>
  </a>
</div>
