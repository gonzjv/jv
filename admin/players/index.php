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

if (!userHasRole('editor'))
{
	$error = 'Only Editors may access this page.';
	include '../accessdenied.html.php';
	exit();
}

if (isset($_GET['add']))
{
  $pageTitle = 'New player';
  $action = 'addform';
  $name = '';
  $secName = '';
  $authorid = '';
  $id = '';
  $button = 'Add player';

  include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';

  // Build the list of authors
  try
  {
    $result = $pdo->query('SELECT id, name FROM info');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of authors.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $authors[] = array('id' => $row['id'], 'name' => $row['name']);
  }

  // Build the list of categories
  try
  {
    $result = $pdo->query('SELECT id, country FROM nation');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of nations.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $nations[] = array(
        'id' => $row['id'],
        'country' => $row['country'],
        'selected' => FALSE);
  }

  include 'form.html.php';
  exit();
}

if (isset($_GET['addform']))
{
  include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';

  if ($_POST['author'] == '')
  {
    $error = 'You must choose an author for this player.
        Click &lsquo;back&rsquo; and try again.';
    include 'error.html.php';
    exit();
  }

  try
  {
    $sql = 'INSERT INTO players SET
		name=:name,
        secName = :secName,
        authorid = :authorid';
    $s = $pdo->prepare($sql);
	$s->bindValue(':name', $_POST['name']);
    $s->bindValue(':secName', $_POST['secName']);
    $s->bindValue(':authorid', $_POST['author']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted player.';
    include 'error.html.php';
    exit();
  }

  $playerId = $pdo->lastInsertId();

  if (isset($_POST['nations']))
  {
    try
    {
      $sql = 'INSERT INTO playersnation SET
          playerId = :playerId,
          nationId = :nationId';
      $s = $pdo->prepare($sql);

      foreach ($_POST['nations'] as $nationId)
      {
        $s->bindValue(':playerId', $playerId);
        $s->bindValue(':nationId', $nationId);
        $s->execute();
      }
    }
    catch (PDOException $e)
    {
      $error = 'Error inserting player into selected categories.';
      include 'error.html.php';
      exit();
    }
  }

  header('Location: .');
  exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
  include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';

  try
  {
    $sql = 'SELECT id, name, secName, authorid FROM players
	WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching player details.';
    include 'error.html.php';
    exit();
  }
  $row = $s->fetch();

  $pageTitle = 'Edit Player';
  $action = 'editform';
  $name = $row['name'];
  $secName=$row['secName'];
  $authorid = $row['authorid'];
  $id = $row['id'];
  $button = 'Update player';
  
  try
  {
    $sql = 'UPDATE players SET
	timesviewed = timesviewed + 1
	WHERE id = :id';
    $u = $pdo->prepare($sql);
    $u->bindValue(':id', $_POST['id']);
    $u->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error updating timesviewed player details.';
    include 'error.html.php';
    exit();
  }

  // Build the list of authors
  try
  {
    $result = $pdo->query('SELECT id, name FROM info');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of authors.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $authors[] = array('id' => $row['id'], 'name' => $row['name']);
  }

  // Get list of categories containing this joke
  try
  {
    $sql = 'SELECT nationId FROM playersnation WHERE playerId = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $id);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of selected nations.';
    include 'error.html.php';
    exit();
  }

  foreach ($s as $row)
  {
    $selectedNations[] = $row['nationId'];
  }

  // Build the list of all categories
  try
  {
    $result = $pdo->query('SELECT id, country FROM nation');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of nations.';
    include 'error.html.php';
    exit();
  }
  
  foreach ($result as $row)
  {
    $nations[] = array(
        'id' => $row['id'],
        'country' => $row['country'],
        'selected' => in_array($row['id'], $selectedNations));
  }

  include 'form.html.php';
  exit();
}

if (isset($_GET['editform']))
{
  include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';

  if ($_POST['author'] == '')
  {
    $error = 'You must choose an author for this player.
        Click &lsquo;back&rsquo; and try again.';
    include 'error.html.php';
    exit();
  }

  try
  {
    $sql = 'UPDATE players SET
        name = :name,
		secName=:secName,
        authorid = :authorid
        WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->bindValue(':name', $_POST['name']);
	$s->bindValue(':secName', $_POST['secName']);
    $s->bindValue(':authorid', $_POST['author']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error updating submitted player.';
    include 'error.html.php';
    exit();
  }

  try
  {
    $sql = 'DELETE FROM playersnation WHERE playerId = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error removing obsolete joke category entries.';
    include 'error.html.php';
    exit();
  }

  if (isset($_POST['nations']))
  {
    try
    {
      $sql = 'INSERT INTO playersnation SET
          playerId = :playerId,
          nationId = :nationId';
      $s = $pdo->prepare($sql);

      foreach ($_POST['nations'] as $nationId)
      {
        $s->bindValue(':playerId', $_POST['id']);
        $s->bindValue(':nationId', $nationId);
        $s->execute();
      }
    }
    catch (PDOException $e)
    {
      $error = 'Error inserting joke into selected categories.';
      include 'error.html.php';
      exit();
    }
  }

  header('Location: .');
  exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Delete')
{
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';
  // Delete category assignments for this joke
  try
  {
    $sql = 'DELETE FROM playersnation WHERE playerId = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error removing player from nation.';
    include 'error.html.php';
    exit();
  }

  // Delete the joke
  try
  {
    $sql = 'DELETE FROM players WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting player.';
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

if (isset($_GET['action']) and $_GET['action'] == 'search')
{
  include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';

  // The basic SELECT statement
  $select = 'SELECT id, secName';
  $from   = ' FROM players';
  $where  = ' WHERE TRUE';

  $placeholders = array();

  if ($_GET['author'] != '') // An author is selected
  {
    $where .= " AND authorid = :authorid";
    $placeholders[':authorid'] = $_GET['author'];
  }

  if ($_GET['nation'] != '') // A category is selected
  {
    $from  .= ' INNER JOIN playersNation ON id = playerId';
    $where .= " AND nationId = :nationId";
    $placeholders[':nationId'] = $_GET['nation'];
  }

  if ($_GET['text'] != '') // Some search text was specified
  {
    $where .= " AND secName LIKE :secName";
    $placeholders[':secName'] = '%' . $_GET['text'] . '%';
  }
  
  $where .= ' ORDER BY secName';

 /*/ 
  if ($_GET['visible'] = 'yes') // Some search text was specified
  { 
	$where .= " AND visible = 'yes'";
  }
  /*/
    
  try
  {
    $sql = $select . $from . $where;
    $s = $pdo->prepare($sql);
    $s->execute($placeholders);
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching players.';
    include 'error.html.php';
    exit();
  }

  foreach ($s as $row)
  {
    $players[] = array(
	'id' => $row['id'], 'secName' => $row['secName']);
  }

  include 'players.html.php';
  exit();
}

// Display search form
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db_inc.php';

try
{
  $result = $pdo->query('SELECT id, secName FROM players');
}
catch (PDOException $e)
{
  $error = 'Error fetching players from database!';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $players[] = array('id' => $row['id'], 
  'secName' => $row['secName']);
}

try
{
  $result = $pdo->query('SELECT id, country FROM nation');
}
catch (PDOException $e)
{
  $error = 'Error fetching nation from database!';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $nations[] = array('id' => $row['id'], 'country' => $row['country']);
}

try
{
  $result = $pdo->query('SELECT id, name FROM info');
}
catch (PDOException $e)
{
  $error = 'Error fetching info from database!';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $authors[] = array(
  'id' => $row['id'], 
  'name' => $row['name']
  );
}
include 'searchform.html.php';
