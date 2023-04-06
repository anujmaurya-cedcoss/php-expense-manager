<?php
    session_start();
    $id = $_POST['id'];
    $value = $_POST['value'];
    $_SESSION['app']['income'][$id] = $value;
?>