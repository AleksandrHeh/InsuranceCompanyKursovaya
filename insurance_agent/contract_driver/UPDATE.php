<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";

try {
    $db=includeBD();
    $drvr_id = trim($_POST['drvr_id']);
    $cntr_id = trim($_POST['cntr_id']);
    $sql = "UPDATE contract_driver
    SET 
    drvr_id = $drvr_id
    WHERE
    cntr_id = $cntr_id
    ";
    
    $db->exec($sql);
    header('Location: contract_driver.php');
    
}   
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>

