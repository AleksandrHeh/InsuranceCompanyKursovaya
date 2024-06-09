<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";


try {
    $db=includeBD();
    $tpnsr_insurance_number = trim($_POST['tpnsr_insurance_number']);
    $tpnsr_type_of_insurance = trim($_POST['tpnsr_type_of_insurance']);
    $tpnsr_bsic_rate = trim($_POST['tpnsr_bsic_rate']);

    $data = array(
        'tpnsr_insurance_number' => $tpnsr_insurance_number,
        'tpnsr_type_of_insurance' => $tpnsr_type_of_insurance,
        'tpnsr_bsic_rate' => $tpnsr_bsic_rate
    );
    
        $sql = "INSERT INTO type_insurance 
        (tpnsr_insurance_number, tpnsr_type_of_insurance, tpnsr_bsic_rate)
        VALUES 
        (:tpnsr_insurance_number, :tpnsr_type_of_insurance, :tpnsr_bsic_rate)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: type_insurance.php');
}   
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>