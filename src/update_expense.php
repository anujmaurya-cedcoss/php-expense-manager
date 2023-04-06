<?php
    session_start();
    $id = $_POST['id'];
    $category = $_POST['category'];
    $value = $_POST['value'];
    $_SESSION['app']['expense'][$id][$category] = $value;
    
?>