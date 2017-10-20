<div class="row" id="featured">
  <a class="link" href="index.php?blog=<?= $blog[0]["id_blog"] ?>">
    <div class="row">
      <img src="<?= $blog[0]["img_path"] ?>" alt="" id="featuredPic">
    </div>
    <div>
      <h1 class="appTitle" id="featuredTitle"><?= $blog[0]["nameBlog"] ?></h1>
    </div>
  </a>
</div>
<?php foreach ($blog as $key => $value): ?>
  <div class="row item">
    <a class="link" href="index.php?blog=<?=$value["id_blog"]?>">
    <div class="col-xs-12 col-sm-12">
      <div class="row">
        <div class="col-xs-3">
          <img src="<?= $value["img_path"] ?>" class="logo">
        </div>

        <div class="col-xs-8 col-sm-8">
          <h1 class="description link">
            <?= $value["nameBlog"] ?>
            <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
            </fieldset>
          </h1>
          <p class="description"><?= $value["intro"] ?></p>
        </div>
      </div>
    </div>
    </a>
  </div>
  <script type="text/javascript">
  $('input[type=radio]').on('change', function() {
    $(this).closest("form").submit();
  });
  </script>
<?php endforeach; ?>
