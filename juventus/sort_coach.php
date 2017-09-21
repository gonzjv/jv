<?php
try
{
include 'db_inc.php';
$sql = 'SELECT players.id,players.2name
 FROM players INNER JOIN coachwho 
 ON players.id = playerid
 INNER JOIN coach
 ON coachid = coach.id
 WHERE coach.2name = "conte"
 '; 
$result=$pdo->query($sql);
}
catch (PDOException $e)
{
$error = 'dont work about players: ' . $e->getMessage();
include 'error.html';
exit();
}
foreach($result as $row)
{
	$players[] = array (
	'id'=>$row ['id'], 
	'2name'=>$row['2name'],
	);
}
include 'sort_coach.html';