<?php
session_start();
// to add the expenses in the session
if(!isset($_SESSION['app']['expense'])) {
    $_SESSION['app']['expense'] = [];
}
if(!isset($_SESSION['cart']['total'])) {
    $_SESSION['cart']['total'] = 0;
}
if(isset($_POST['spent']) && $_POST['spent'] > 0) {
    $arr = [$_POST['category'] => $_POST['spent']];
    $id = uniqid();
    $_SESSION['app']['expense'][$id] = $arr;
}
?>
