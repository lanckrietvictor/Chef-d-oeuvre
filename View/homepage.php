<?php foreach ($apps as $key => $value): ?>
  <div class="row item">
    <a class="link" href="index.php?action=<?=$value["name_app"]?>">
    <div class="col-xs-12 col-sm-12">
      <div class="row">
        <div class="col-xs-3">
          <img src="<?= $value["img_path"] ?>" class="logo">
        </div>

        <div class="col-xs-8 col-sm-8">
          <h1 class="description link">
            <?= $value["name_app"] ?>
            <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
            </fieldset>
          </h1>
          <p class="description"><?= $value["description"] ?></p>
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
