<div class="container-fluid padding" id="background">
  <div class="row">
    <div class="col-xs-12 col-sm-12">
      <h1 class="appTitle"><?= $specificApp[0]["name_app"] ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12">
      <form action="index.php?action=".<?php$_GET["action"]?> method="post">
        <textarea id="mytextarea" name="textarea"></textarea>
        <br>
        <button type="submit" name="submitbtn">Submit</button>
      </form>
      <pre><?php $_POST["textarea"] ?></pre>
    </div>
  </div>
</div>
