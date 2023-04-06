<?php
session_start();
// to add income
if(!isset($_SESSION['app']['income'])) {
    $_SESSION['app']['income'] = [];
}
if(!isset($_SESSION['cart']['total'])) {
    $_SESSION['cart']['total'] = 0;
}
if(isset($_POST['income']) && $_POST['income'] > 0) {
    $id = uniqid();
    $_SESSION['app']['income'][$id] = $_POST['income'];
}
?>
