<?php
require_once "../include_bd.php";
try
{
    $db=includeBD();
    $wnr_id = trim($_POST['wnr_id']);

    
    $sql = "DELETE FROM owner WHERE wnr_id=$wnr_id";

    $db->query($sql);
    header('Location: owner.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>