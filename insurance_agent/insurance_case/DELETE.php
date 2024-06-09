<?php
require_once "../include_bd.php";
try
{
    $db=includeBD();
    $mpl_id = trim($_POST['mpl_id']);

    
    $sql = "DELETE FROM employee WHERE mpl_id=$mpl_id";

    $db->query($sql);
    header('Location: employee.php');
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>