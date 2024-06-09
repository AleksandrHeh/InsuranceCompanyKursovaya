<?php
require_once "../include_bd.php";
try
{
    $db=includeBD();
    $cntr_id = trim($_POST['cntr_id']);

    
    $sql = "DELETE FROM contract_driver WHERE cntr_id=$cntr_id";

    $db->query($sql);
    header('Location: contract_driver.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>