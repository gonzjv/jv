<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/magicquotes.inc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
//include_once './session.php';

echo $_SESSION['count'];
if (isset($_POST['action']) and $_POST['action'] == 'order' or
        isset($_GET['order'])) {
    include './order.php';
}
if (isset($_GET['sign_up'])) {
    include './sign_up.html.php';
    exit();
}
if (!pass_ok()) {
    // Empty the $_SESSION['cart'] array
    include './sign_up.html.php';
    exit();
}
if (isset($_GET['news'])) {
    include './news.html.php';
    exit();
}
if (isset($_GET['shop'])) {
    include './cart.php';
    include './deskGames.html.php';
    exit();
}
if (isset($_POST['action']) and $_POST['action'] == 'orderInsert') {
    include './orderInsert.php';
}

include 'home.html.php';
