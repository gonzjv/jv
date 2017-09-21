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
	<div id="content"> 
	<h1>Вступайте в наш виртуальный клуб</h1> 
	<p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p> 
	<form action="?<?php htmlout($action); ?>" method="POST" 
	enctype="multipart/form-data"> 
	<fieldset>
		<label for="model">model:</label>
		<textarea id="model" name="model" rows="1" cols="20"><?php
        htmlout($model); ?></textarea>
		<label for="manufacturer">manufacturer:</label> 
		<textarea id="manufacturer" name="manufacturer" rows="1"
		cols="20"><?php htmlout($manufacturer); ?></textarea>
		<label for="price">price:</label> 
		<textarea id="price" name="price" rows="1"
		cols="20"><?php htmlout($price); ?></textarea>
		<label for="user_pic">Отправка изображения:</label> 
		<input type="file" name="user_pic" size="30" /> 
	</fieldset>
	<br />
	<fieldset class="center">
		<input type="hidden" name="id" value="<?php
        htmlout($id); ?>">
        <input type="submit" value="Add watches" /> 
	</fieldset>
	</form>
	</div>
	<div id="footer"></div>
</body>
</html>