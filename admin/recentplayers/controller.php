<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

try
{
  $sql = 'SELECT id, secName FROM players
      ORDER BY secName DESC
      LIMIT 3';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching players.';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/error.html.php';
  exit();
}

foreach ($result as $row)
{
  $players[] = array('secName' => $row['secName']);
}

include 'players.html.php';
