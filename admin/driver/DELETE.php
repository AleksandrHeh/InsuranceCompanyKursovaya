<?php
require_once "../include_bd.php";
try
{
   $db=includeBD();
    $drvr_id = trim($_POST['drvr_id']);

    
    $sql = "DELETE FROM driver WHERE drvr_id=$drvr_id";

    $db->query($sql);
    header('Location: driver.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?> 