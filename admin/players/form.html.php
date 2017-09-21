<?php include_once 
$_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php htmlout($pageTitle); ?></title>
    <style type="text/css">
    textarea {
      display: block;
      width: 100%;
    }
    </style>
  </head>
  <body>
    <h1><?php htmlout($pageTitle); ?></h1>
    <form action="?<?php htmlout($action); ?>" method="post">
      <div>
        <label for="name">Type player name here:</label>
        <textarea id="name" name="name" rows="1" cols="20"><?php
            htmlout($name); ?></textarea>
      </div>
	  <div>
        <label for="secName">Type player sec. name here:</label>
        <textarea id="secName" name="secName" rows="1" cols="20"><?php
            htmlout($secName); ?></textarea>
      </div>
      <div>
        <label for="author">Author:</label>
        <select name="author" id="author">
          <option value="">Select one</option>
          <?php foreach ($authors as $author): ?>
            <option value="<?php htmlout($author['id']); ?>"<?php
                if ($author['id'] == $authorid)
                {
                  echo ' selected';
                }
                ?>><?php htmlout($author['name']); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <fieldset>
        <legend>Nations:</legend>
        <?php foreach ($nations as $nation): ?>
          <div><label for="nation<?php htmlout($nation['id']);
              ?>"><input type="checkbox" name="nations[]"
              id="nation<?php htmlout($nation['id']); ?>"
              value="<?php htmlout($nation['id']); ?>"<?php
              if ($nation['selected'])
              {
                echo ' checked';
              }
              ?>><?php htmlout($nation['country']); ?></label></div>
        <?php endforeach; ?>
      </fieldset>
      <div>
        <input type="hidden" name="id" value="<?php
            htmlout($id); ?>">
        <input type="submit" value="<?php htmlout($button); ?>">
      </div>
    </form>
  </body>
</html>
