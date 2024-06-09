<?php
require_once "../include_bd.php";
try
{
    $db=includeBD();
    $tpnsr_insurance_number = trim($_POST['tpnsr_insurance_number']);

    
    $sql = "DELETE FROM type_insurance WHERE tpnsr_insurance_number=$tpnsr_insurance_number";

    $db->query($sql);
    header('Location: type_insurance.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>