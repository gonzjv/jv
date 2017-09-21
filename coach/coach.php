<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';
try
{
$sql = 'SELECT id,1name,2name 
FROM coach' ;
$result=$pdo->query($sql);
}
catch (PDOException $e)
{
$error = 'error about coach: ' . $e->getMessage();
include 'error.html';
exit();
}
foreach($result as $row1)
{//move to html
	$coaches[] = array (
	'id'=>$row1 ['id'], 
	'1name'=>$row1['1name'],
	'2name'=>$row1['2name'],
	);
}
include 'output.html';