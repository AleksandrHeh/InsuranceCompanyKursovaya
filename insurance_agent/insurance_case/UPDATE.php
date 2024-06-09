<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";

try {
    $db=includeBD();
    $nsr_id = trim($_POST['nsr_id']);
    $cntr_id = trim($_POST['cntr_id']);
    $nsrn_date = trim($_POST['nsrn_date']);
    $nsrn_description = trim($_POST['nsrn_description']);
    $nsrn_cost = $_POST['nsrn_cost'];
    $sql = "UPDATE insurance_case
    SET 
    cntr_id = $cntr_id, 
    nsrn_date = '$nsrn_date', 
    nsrn_description = '$nsrn_description', 
    nsrn_cost = $nsrn_cost
    WHERE
    nsr_id = $nsr_id
    ";
    
    $db->exec($sql);
    header('Location: insurance_case.php');
    
}   
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>

