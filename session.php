<?php

session_start();
//$date1 = '2011-02-12 20.20.20';
//$date2 = '12.02.2011 20.21.20';
//echo strtotime($date1) . ' ' . strtotime($date2);
//try {
//    $sql = 'SELECT insertDate, insertTime FROM orders WHERE firstName = :firstName';
//    $s = $pdo->prepare($sql);
//    $s->bindValue(':firstName', $_SESSION['firstName']);
//    $s->execute();
//} catch (PDOException $e) {
//    $error = 'Error fetching insertDate, insertTime from the database!';
//    include 'error.html.php';
//    exit();
//}
//foreach ($s as $row) {
//    $insertDateTime[] = ['date' => $row['insertDate'], 'time' => $row['insertTime']];
//}
try {
    $sql = 'SELECT insertDateTime FROM orders WHERE firstName = :firstName';
    $s = $pdo->prepare($sql);
    $s->bindValue(':firstName', $_SESSION['firstName']);
    $s->execute();
} catch (PDOException $e) {
    $error = 'Error fetching insertDate, insertTime from the database!';
    include 'error.html.php';
    exit();
}
foreach ($s as $row) {
    $insertDateTime[] = ['insertDateTime' => $row['insertDateTime']];
}
$dateTime = new DateTime($insertDateTime[0]['insertDateTime']);
$dateTime->add(new DateInterval('PT5M'));
$timeUnset = $dateTime->format('Y-m-d H:i:s');
$now = date('Y-m-d H:i:s');
//var_dump($now);
//echo '_________';
//var_dump($timeUnset);
if ($now > $timeUnset) {
    $_SESSION['orderIsDone'] = false;
}

