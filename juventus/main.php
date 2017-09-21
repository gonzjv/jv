<?php
try
{//select players
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';
$result=$pdo->query('
SELECT players.id,players.2name, name,email
 FROM players INNER JOIN info 
 ON authorid = info.id
  ');
$result_2=$pdo->query('SELECT COUNT(*) FROM players');
$sum_player=$result_2->fetch();
}
catch (PDOException $e)
{
$error = 'dont work about players: ' . $e->getMessage();
include 'error.html';
exit();
}
try
{
$result_2=$pdo->query('SELECT COUNT(*) FROM coach');
$sum_coach=$result_2->fetch();
}
catch (PDOException $e)
{
$error = 'error about coach: ' . $e->getMessage();
include 'error.html';
exit();
}
foreach($result as $row)
{//move to html
	$players[] = array (
	'id'=>$row ['id'], 
	'2name'=>$row['2name'],
	'name'=>$row['name'],
	'email'=>$row['email'],
	);
}
include 'main.html';	
include $_SERVER['DOCUMENT_ROOT'] . '/coach/coach.php';