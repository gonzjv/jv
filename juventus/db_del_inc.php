<?php //delete 
include 'db_inc.php';
try
	{
	$sql = 'DELETE FROM players WHERE id = :id';
$s = $pdo->prepare($sql);
$s->bindValue(':id', $_POST['id']);
$s->execute();
	}
	catch (PDOException $e)
	{
	$error = 'error when deleting player: ' . $e->getMessage();
	include 'error.html';
	exit();
	}
header('Location: .');
  exit();