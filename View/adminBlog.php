<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AIP</title>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
    tinymce.init({
      selector: '#article',
      plugins: "image",
      menubar: "insert"
    });
    </script>
  </head>
  <body>
    <h1>Here you can add a new blog article to the site!</h1>
    <form action="index.php?admin=blog" method="post">
      <label>Title of the article: </label>
      <input required type="text" name="name">

      <br>
      <br>
      <label>Intro of the article (to appear under picture or during preview): </label>
      <textarea required name="intro" rows="8" cols="80" id="descriptionArea"></textarea>

      <br>
      <br>
      <label>Picture to accompany article (please use a high quality png): </label>
      <input required type="file" name="picture" accept="image/*">

      <br>
      <br>
      <textarea name="article" id="article"></textarea>

      <br>
      <br>
      <input required type="submit" name="addBlog" value="Add">
    </form>
    <form action="index.php" method="post">
    	<input type="submit" name="deconnect" value="Deconnect" id="logout">
    </form>
  </body>
</html>
