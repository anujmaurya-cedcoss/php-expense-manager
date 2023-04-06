<?php
session_start();
// session configuration 
$income = [[]];
$expense = [[]];
if(!isset($_SESSION['app'])) {
    array_push($_SESSION['app'], $income);
    array_push($_SESSION['app'], $expense);
}
?>