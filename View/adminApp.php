<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AIP</title>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
    tinymce.init({
      selector: '#appBlog',
      plugins: "image",
      menubar: "insert"
    });
    </script>
  </head>
  <body>
    <h1>Here you can add a new app to the site!</h1>
    <form action="index.php?admin=addApp" method="post">
      <label>Name of the app: </label>
      <input required type="text" name="name" >

      <br>
      <br>
      <label>Short description of the app (for front page): </label>
      <textarea required name="description" rows="8" cols="80" id="descriptionArea"></textarea>

      <br>
      <br>
      <label>Link: </label>
      <input type="text" name="link" value="">

      <br>
      <br>
      <label>Logo of the app (please use a high quality png): </label>
      <input required type="file" name="logo" accept="image/*">

      <br>
      <br>
      <label>Usage of the app: </label>
      <select required name="usage">
        <option value=""><i>Make your choice</i></option>
        <option value="personal">Personal</option>
        <option value="personal">Professional</option>
        <option value="personal">Business</option>
      </select>

      <br>
      <br>
      <textarea name="appBlog" id="appBlog"></textarea>

      <br>
      <br>
      <input required type="submit" name="add" value="Add">
    </form>
    <form action="index.php" method="post">
    	<input type="submit" name="deconnect" value="Deconnect" id="logout">
    </form>
  </body>
</html>
