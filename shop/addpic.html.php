<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Add pic to item</title>
<link rel='stylesheet' type='text/css' href='styles.css'>
</head>
<body>
<div class='wrapBig'>
	<div class='wrap'>
	<form action="index.php" method="post"
	enctype="multipart/form-data">
		<div>
			<label id="upload">Выберите изображение для загрузки:
			<input type="hidden" name="MAX_FILE_SIZE" value="3072000">
			<input type="file" id="upload" name="upload">
			</label>
		</div>
		<div>
			<input type="hidden" name="action" value="upload">
			<input type="submit" value="Submit">
		</div>
	</form>	
	</div>
</div>
	
<?php include 'logout.inc.html.php'; ?>
</body>
</html>