<?php
include_once $_SERVER['DOCUMENT_ROOT']
. '/includes/magicquotes_disable.php';
include_once $_SERVER['DOCUMENT_ROOT']
. '/includes/db_inc.php';

if (isset($_GET['add']))
{
  $page_title = 'New country';
  $action = 'addform';
  $country = '';
  $id = '';
  $button = 'Add country';

  include 'form.html.php';
  exit();
}

if (isset($_GET['addform']))
{
  try
  {
    $sql = 'INSERT INTO category_from SET
        country = :country';
    $s = $pdo->prepare($sql);
    $s->bindValue(':country', $_POST['country']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted category.';
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
  try
  {
    $sql = 'SELECT id, country FROM category WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching category details.';
    include 'error.html.php';
    exit();
  }

  $row = $s->fetch();

  $page_title = 'Edit Category';
  $action = 'editform';
  $country = $row['country'];
  $id = $row['id'];
  $button = 'Update category';

  include 'form.html.php';
  exit();
}

if (isset($_GET['editform']))
{
  try
  {
    $sql = 'UPDATE category SET
        country = :country
        WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->bindValue(':country', $_POST['country']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error updating submitted category.';
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}
/*/
if (isset($_POST['action']) and $_POST['action'] == 'Delete')
{
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

  // Delete joke associations with this category
  try
  {
    $sql = 'DELETE FROM jokecategory WHERE categoryid = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error removing jokes from category.';
    include 'error.html.php';
    exit();
  }

  // Delete the category
  try
  {
    $sql = 'DELETE FROM category WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting category.';
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

// Display category list
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
/*/
try
{
  $result = $pdo->query('SELECT id, country FROM category');
}
catch (PDOException $e)
{
  $error = 'Error fetching categories from database!';
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $countries[] = array
  (
  'id' => $row['id'], 
  'country' => $row['country']
  );
}

include 'main.html.php';
