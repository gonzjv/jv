<?php include_once 
$_SERVER['DOCUMENT_ROOT'] . ' /includes/FC_html_text.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php htmlout($page_title); ?></title>
  </head>
  <body>
    <h1><?php htmlout($page_title); ?></h1>
    <form action="?<?php htmlout($action); ?>" method="post">
      <div>
        <label for="country">Country: <input type="text" name="country"
            id="country" value="<?php htmlout($country); ?>"></label>
      </div>
      <div>
        <input type="hidden" name="id" value="<?php
            htmlout($id); ?>">
        <input type="submit" value="<?php htmlout($button); ?>">
      </div>
    </form>
  </body>
</html>
