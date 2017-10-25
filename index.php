<?php

include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/magicquotes.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

// Display games list
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
try {
    $result = $pdo->query('SELECT id, name, price FROM desk_games');
} catch (PDOException $e) {
    $error = 'Error fetching games from the database!';
    include 'error.html.php';
    exit();
}

foreach ($result as $row) {
    $items[] = ['id' => $row['id'],'name' => $row['name'],
        'price' => $row['price']];}

session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['action']) and $_POST['action'] == 'Buy') {
    // Add item to the end of the $_SESSION['cart'] array
    $_SESSION['cart'][] = $_POST['id'];
    header('Location: .');
    exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Empty cart') {
    // Empty the $_SESSION['cart'] array
    unset($_SESSION['cart']);
    header('Location: ?cart');
    exit();
}

if (isset($_GET['cart'])) {
    $cart = array();
    $total = 0;
    foreach ($_SESSION['cart'] as $id) {
        foreach ($items as $product) {
            if ($product['id'] == $id) {
                $cart[] = $product;
                $total += $product['price'];
                break;
            }
        }
    }

    include 'cart.html.php';
    exit();
}

include 'catalog.html.php';


