<?php foreach ($apps as $key => $value): ?>
  <div class="row item">
    <a class="link" href="index.php?action=<?=$value["name_app"]?>">
    <div class="col-xs-12 col-sm-12">
      <div class="row">
        <div class="col-xs-3 image">
          <img src="<?= $value["img_path"] ?>" class="logo">
        </div>

        <div class="col-xs-8 col-sm-8">
          <h1 class="description link"><?= $value["name_app"] ?></h1>
          <p class="description"><?= $value["description"] ?></p>
        </div>
      </div>
    </div>
    </a>
  </div>
<?php endforeach; ?>
