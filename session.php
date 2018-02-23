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
$insertDateTime[] = ['insertDateTime'=>$row['insertDateTime']];
}
//$unsetTime=(strtotime($insertDateTime['0']['date'] . ' ' . $insertDateTime['0']['time'])) ;
//$unsetTime1=(strtotime('2018-02-22' . ' ' . '15:15:14')) ;
//echo 'Текущее время: ' . date('Y-m-d H:i:s') . "\n";
$unsetTime= new DateTime($insertDateTime[0]['insertDateTime']);
//print_r ($unsetTime);
echo '______________      ';
$unsetTime->add(new DateInterval('PT10S'));
print_r($unsetTime);

$now=date('Y-m-d H:i:s');
var_dump($now);
if (strtotime($now)>strtotime($unsetTime)) {
    echo '--------------Yes!';
    
}

