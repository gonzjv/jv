<?php

try {
    $sql = 'INSERT INTO orders SET 
            lastName= :lastName,
            firstName= :firstName,
            vehicle=:vehicle,
            date=:date';
    $s = $pdo->prepare($sql);
    $s->bindValue(':lastName', $_POST['lastName']);
    $s->bindValue(':firstName', $_POST['firstName']);
    $s->bindValue(':vehicle', $_POST['vehicle']);
    $s->bindValue(':date', $_POST['date']);
    $s->execute();
} catch (PDOException $e) {
    $error = 'Ошибка при записи заказа в БД.';
    include 'error.html.php';
    exit();
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
