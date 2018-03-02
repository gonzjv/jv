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
try {
    $sql = 'SELECT COUNT(*) FROM dates WHERE date= :date';
    $s = $pdo->prepare($sql);
    $s->bindValue(':date', $_POST['date']);
    $s->execute();
} catch (PDOException $e) {
    $error = 'Error when select count orders of the date';
    include 'error.html.php';
    exit();
}
$count = $s->fetch();
if ($count[0] == 0) {
    try {
        $sql = 'INSERT INTO dates SET 
            date= :date,
            count=1';
        $s = $pdo->prepare($sql);
        $s->bindValue(':date', $_POST['date']);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Ошибка при записи даты, номера заказа в БД.';
        include 'error.html.php';
        exit();
    }
} else {
    try {
        $sql = 'UPDATE dates SET 
            count=count + 1
            WHERE date=:date';
        $s = $pdo->prepare($sql);
        $s->bindValue(':date', $_POST['date']);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Ошибка при записи даты, номера заказа в БД.';
        include 'error.html.php';
        exit();
    }
}
//        try {
//            $sql = 'SELECT COUNT(*) FROM orders WHERE 
//            date = :date';
//            $s = $pdo->prepare($sql);
//            $s->bindValue(':date', $_POST['date']);
//            $s->execute();
//        } catch (PDOException $e) {
//            $error = 'Ошибка при подсчете записанных на день в БД.';
//            include 'error.html.php';
//            exit();
//        }
//        $row = $s->fetch();
//        if ($row[0] > 0){
//            try {
//            $sql = 'UPDATE calendar SET
//                count=:count 
//                WHERE date = :date';
//            $s = $pdo->prepare($sql);
//            $s->bindValue(':date', $_POST['date']);
//            $s->execute();
//        } catch (PDOException $e) {
//            $error = 'Ошибка при подсчете записанных на день в БД.';
//            include 'error.html.php';
//            exit();
//        }
//        }
//        return TRUE;
//    } else {
//        return FALSE;
//    }
//
$_SESSION['orderIsDone'] = TRUE;
$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['vehicle'] = $_POST['vehicle'];
$_SESSION['date'] = $_POST['date'];
header('Location: .');
exit();
