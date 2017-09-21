<?php //insert player
	include 'db_inc.php';
	try 
	{
	$sql = 'INSERT INTO players
	SET 2name=:2name'; 
$s = $pdo->prepare($sql);
$s->bindValue(':2name', $_POST['2name']);
$s->execute();
	}
	catch (PDOException $e)
	{
	$error = 'error to insert player: ' . $e->getMessage();
	include 'error.html';
	exit();
	}
header('Location: .');
  exit();