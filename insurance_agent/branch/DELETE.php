<?php
require_once "../include_bd.php";
try
{
   $db=includeBD();
    $brnch_id = trim($_POST['brnch_id']);

    
    $sql = "DELETE FROM branch WHERE brnch_id=$brnch_id";

    $db->query($sql);
    header('Location: branch.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?> 