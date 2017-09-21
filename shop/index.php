<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/magicquotes.inc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
include_once 
$_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';

session_start();

// Build the list of watches
  try
  {
    $result = $pdo->query('
	SELECT id, model, manufacturer, price, picURL
	FROM watches');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of watches.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $watches[] = array(
	'id' => $row['id'], 
	'model' => $row['model'],
	'manufacturer' => $row['manufacturer'], 
	'price' => $row['price'],
	'picURL' => $row['picURL']);
  }


if (isset($_GET['add']))
{
  $pageTitle = 'New watches';
  $action = 'addform';
  $id = '';
  $model= '';
  $manufacturer = '';
  $price = '';
  $picURL = '';
  $button = 'Add watch';

  include 'form.html.php';
  exit();
}

if (isset($_GET['addform']))
{
  if ($_POST['model'] == '')
  {
    $error = 'You must choose an author for this player.
        Click &lsquo;back&rsquo; and try again.';
    include 'error.html.php';
    exit();
  }

  try
  {
    $sql = 'INSERT INTO watches SET
		model=:model,
        manufacturer = :manufacturer,
        price = :price';
    $s = $pdo->prepare($sql);
	$s->bindValue(':model', $_POST['model']);
    $s->bindValue(':manufacturer', $_POST['manufacturer']);
    $s->bindValue(':price', $_POST['price']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding watches.';
    include 'error.html.php';
    exit();
  }

  $lastId = $pdo->lastInsertId();
  
	if (preg_match('/^image\/p?jpe?g$/i', $_FILES['user_pic']['type']))
	{
	$ext = '.jpg';
	}
	else if (preg_match('/^image\/gif$/i', $_FILES['user_pic']['type']))
	{
	$ext = '.gif';
	}
	else if (preg_match('/^image\/(x-)?png$/i',
	$_FILES['user_pic']['type']))
	{
	$ext = '.png';
	}
	else
	{
	$ext = '.unknown';
	}
// Имя файла и полный путь к нему
	$filename = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . 
	time() . $_SERVER['REMOTE_ADDR'] . $ext;

	// Копируем файл (если это безопасно).
	if (!is_uploaded_file($_FILES['user_pic']['tmp_name']) or
	!copy($_FILES['user_pic']['tmp_name'], $filename))
	{
	$error = "Не удалось сохранить файл под именем $filename!";
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/error.html.php';
	exit();
	}

	$webImagePath = str_replace($_SERVER['DOCUMENT_ROOT'], 
	'', $filename); 
	
try
  {
    $sql = 'UPDATE watches SET
		picURL=:picURL
		WHERE id=:id';
    $s = $pdo->prepare($sql);
	$s->bindValue(':picURL', $webImagePath);
    $s->bindValue(':id', $lastId);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted pic.';
    include 'error.html.php';
    exit();
  }
  header('Location: .');
  exit();
}

if (!isset($_SESSION['cart']))
{
  $_SESSION['cart'] = array();
}

if (isset($_POST['action']) and $_POST['action'] == 'Buy')
{
  // Add item to the end of the $_SESSION['cart'] array
  $_SESSION['cart'][] = $_POST['id'];
  header('Location: .');
  exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Empty cart')
{
  // Empty the $_SESSION['cart'] array
  unset($_SESSION['cart']);
  header('Location: ');
  exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'makeOrder')
{	
// Build the list of watches in the cart
	$cart = array();
	$total = 0;
	foreach ($_SESSION['cart'] as $id)
	{
		foreach ($watches as $product)
		{
			if ($product['id'] == $id)
			{
			$cart[] = $product;
			$total += $product['price'];
			break;
			}
		}
	}

	include 'order.html.php';
	exit();

}

if (isset($_GET['cart']))
{
  $cart = array();
  $total = 0;
  foreach ($_SESSION['cart'] as $id)
  {
    foreach ($watches as $product)
    {
      if ($product['id'] == $id)
      {
        $cart[] = $product;
        $total += $product['price'];
        break;
      }
    }
  }

  include 'cart.html.php';
  exit();
}


include 'main.html';
?>
