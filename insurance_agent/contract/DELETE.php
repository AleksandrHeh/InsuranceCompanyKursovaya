<?php
require_once "../include_bd.php";
try
{
    $db=includeBD();
    $vin = trim($_POST['vin']);
    $id = "'";
    $sql1 = "DELETE FROM contract_driver WHERE cntr_id IN (SELECT cnt.cntr_id FROM contract cnt WHERE vin='$vin')";
    $sql2 = "DELETE FROM contract WHERE vin='$vin'";

    $db->query($sql1);
    $db->query($sql2);
    header('Location: contract.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>