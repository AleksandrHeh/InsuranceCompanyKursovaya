<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";

try {
    $db=includeBD();
    $mpl_id = trim($_POST['mpl_id']);
    $mpl_middlename = trim($_POST['mpl_middlename']);
    $mpl_name = trim($_POST['mpl_name']);
    $mpl_surname = trim($_POST['mpl_surname']);
    $mpl_number_phone = trim($_POST['mpl_number_phone']);
    $sql = "UPDATE employee 
    SET 
    mpl_middlename = '$mpl_middlename', 
    mpl_name = '$mpl_name', 
    mpl_surname = '$mpl_surname', 
    mpl_number_phone = $mpl_number_phone
    WHERE
    mpl_id = $mpl_id
    ";
    
    $db->exec($sql);
    header('Location: employee.php');
    
}   
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>

