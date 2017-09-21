<?php 
include_once 
$_SERVER['DOCUMENT_ROOT'] . '/includes/magicquotes.inc.php';

require_once 
$_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

if (!userIsLoggedIn())
{
	include '../login.html.php';
	exit();
}

if (!userHasRole('admin'))
{
	$error = 'Only Admin may access this page.';
	include '../accessdenied.html.php';
	exit();
}

try
{//select coaches
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';
$result=$pdo->query
('
SELECT id, name, sec_name
FROM coach ORDER BY sec_name
');
$result_2=$pdo->query('SELECT COUNT(*) FROM info');
$sum_author=$result_2->fetch();
}
catch (PDOException $e)
{
$error = 'dont work about authors: ' . $e->getMessage();
include 'error.html';
exit();
}

if(
isset($_POST['action']) and $_POST['action']=='Delete')
{//delete
// select coach.id
	try
	{
		$sql='SELECT id FROM coach WHERE id=:id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id',$_POST['id']);
		$s->execute();	
	}
	catch (PDOException $e)
	{
		$error = 'Error when getting players to delete.' . 
		$e->getMessage();
		include 'error.html';
		exit();
	}
	$result=$s->fetchAll();
	
	// Delete from coachwho
	try
	{
		$sql='DELETE FROM coachwho WHERE coachid=:id';
		$s=$pdo->prepare($sql);
		foreach($result as $row);
		{
			$coach_id=$row['id'];
			$s->bindValue(':id',$coach_id);
			$s->execute();
		}
		
	}
	catch (PDOException $e)
	{
		$error='Error when deleting coachid.' . 
		$e->getMessage();
		include 'error.html';
		exit();
	}
	try
	{
		$sql='DELETE FROM coach WHERE id=:id';
		$s=$pdo->prepare($sql);
		foreach($result as $row);
		{
			$id=$row['id'];
			$s->bindValue(':id',$id);
			$s->execute();
		}
		
	}
	catch (PDOException $e)
	{
		$error='Error when deleting coach' . 
		$e->getMessage();
		include 'error.html';
		exit();
	}
	header('Location: .');
	exit();
}

if (isset($_GET['add']))
	{//add
		$page_title = 'New coach';
		$action = 'addform';
		$name = '';
		$sec_name = '';
		$id = '';
		$button = 'Add coach';
		include 'add_edit_coach.html';
		exit();
		}

if (isset($_GET['addform']))
{//add
  try
  {
    $sql = 'INSERT INTO coach SET
        name = :name,
		sec_name = :sec_name';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['name']);
	$s->bindValue(':sec_name', $_POST['sec_name']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted coach.';
    include 'error.html';
    exit();
  }
  header('Location: .');
  exit();
}	

if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{//edit

  try
  {
    $sql = 'SELECT id, name, sec_name FROM coach WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching coach details.';
    include 'error.html';
    exit();
  }

  $row = $s->fetch();

  $page_title = 'Edit coach';
  $action = 'edit_form';
  $name = $row['name'];
  $sec_name = $row['sec_name'];
  $id = $row['id'];
  $button = 'Update coach';

  include 'add_edit_coach.html';
  exit();
}

if (isset($_GET['edit_form']))
{//edit
  try
  {
    $sql = 'UPDATE coach SET
        name = :name,
        sec_name = :sec_name
        WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->bindValue(':name', $_POST['name']);
    $s->bindValue(':sec_name', $_POST['sec_name']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error updating submitted coach.';
    include 'error.html';
    exit();
  }

  header('Location: .');
  exit();
}

foreach($result as $row)
{//move to html
	$coaches[] = array 
	(
	'id'=>$row ['id'], 
	'name'=>$row['name'],
	'sec_name'=>$row['sec_name']
	);
}
include 'main.html';	