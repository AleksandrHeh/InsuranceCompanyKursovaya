<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";

try {
    $db=includeBD();
    
    $cntr_id = trim($_POST['cntr_id']);
    $mpl_id = trim($_POST['mpl_id']);
    $cls_cntrct_end_data = trim($_POST['cls_cntrct_end_data']);
    $cls_cntrct_reason = trim($_POST['cls_cntrct_reason']);
    $cls_cost = trim($_POST['cls_cost']);

    $sql = "UPDATE closing_contract 
    SET 
    cntr_id = $cntr_id,
    mpl_id = $mpl_id,
    cls_cntrct_end_data = '$cls_cntrct_end_data',
    cls_cntrct_reason = '$cls_cntrct_reason',
    cls_cost = $cls_cost
    WHERE
    cntr_id = $cntr_id
    ";
    
    $db->exec($sql);
    header('Location: closing_contract.php');
    
}   
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>

