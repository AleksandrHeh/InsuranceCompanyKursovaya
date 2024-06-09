<?php
require_once "../include_bd.php";
try
{
    $db=includeBD();
    $vin = trim($_POST['vin']);

    
    $sql = "DELETE FROM car WHERE vin='$vin'";

    $db->query($sql);
    header('Location: car.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>