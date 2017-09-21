<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/magicquotes_disable.php';
if (isset($_GET['addplayer']))
{
include 'form.html';
exit();
}
if (isset($_POST['2name']))
{
include 'db_insert_inc.php';
}  
if (isset($_GET['conteplayers']))
{
include 'sort_coach.php';
}
if (isset($_GET['delplayer']))
{
include 'db_del_inc.php';	
}  
 include 'main.php'; 