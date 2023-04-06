<?php
    session_start();
    $uid = $_POST['id'];
    // find the index of that uid and delete it
    $idx = array_search($uid, array_keys($_SESSION['app']['expense']));
    array_splice($_SESSION['app']['expense'], $idx, 1);
?>