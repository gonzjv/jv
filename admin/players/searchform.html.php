<?php include_once 
$_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Manage players</title>
  </head>
  <body>
    <h1>Manage players</h1>
    <p><a href="?add">Add new player</a></p>
    <form action="" method="get">
      <p>View players satisfying the following criteria:</p>
      <div>
        <label for="author">By author:</label>
        <select name="author" id="author">
          <option value="">Any author</option>
          <?php foreach ($authors as $author): ?>
            <option value="<?php htmlout($author['id']); ?>"><?php
                htmlout($author['name']); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
	  <div>
        <label for="visible">By visibility:</label>
        <select name="visible" id="visible">
          <option value="no">Any visibility</option>
          <option value="yes">yes</option>
		  <option value="no">No</option>
        </select>
      </div>
      <div>
        <label for="nation">By nation:</label>
        <select name="nation" id="nation">
          <option value="">Any nation</option>
          <?php foreach ($nations as $nation): ?>
            <option value="<?php htmlout($nation['id']); ?>"><?php
                htmlout($nation['country']); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label for="text">Containing text:</label>
        <input type="text" name="text" id="text">
      </div>
      <div>
        <input type="hidden" name="action" value="search">
        <input type="submit" value="Search">
      </div>
    </form>
    <p><a href="..">Return to CMS</a></p>
	<?php include '../logout.inc.html.php'; ?>
  </body>
</html>
