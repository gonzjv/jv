<?php

$nowDateTime = date('Y-m-d H:i:s');
try {
    $sql = 'INSERT INTO orders SET 
            lastName= :lastName,
            firstName= :firstName,
            vehicle=:vehicle,
            date=:date,
            insertDateTime=:insertDateTime';
    $s = $pdo->prepare($sql);
    $s->bindValue(':lastName', $_POST['lastName']);
    $s->bindValue(':firstName', $_POST['firstName']);
    $s->bindValue(':vehicle', $_POST['vehicle']);
    $s->bindValue(':date', $_POST['date']);
    $s->bindValue(':insertDateTime', $nowDateTime);
    $s->execute();
} catch (PDOException $e) {
    $error = 'Ошибка при записи заказа в БД.';
    include 'error.html.php';
    exit();
}

$_SESSION['orderIsDone'] = TRUE;
$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['vehicle'] = $_POST['vehicle'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['count'] = $count[0];
header('Location: .');
exit();
