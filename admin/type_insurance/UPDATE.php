<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";


try {
    $db=includeBD();
    $tpnsr_insurance_number = trim($_POST['tpnsr_insurance_number']);
    $tpnsr_type_of_insurance = trim($_POST['tpnsr_type_of_insurance']);
    $tpnsr_bsic_rate = trim($_POST['tpnsr_bsic_rate']);
    $sql = "UPDATE type_insurance
    SET  
    tpnsr_type_of_insurance = '$tpnsr_type_of_insurance', 
    tpnsr_bsic_rate = $tpnsr_bsic_rate
    WHERE
    tpnsr_insurance_number = $tpnsr_insurance_number
    ";

    $db->exec($sql);
    header('Location: type_insurance.php');
    
}   
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>