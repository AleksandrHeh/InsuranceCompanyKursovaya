<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";

try {
    $db=includeBD();
    $brnch_id = trim($_POST["brnch_id"]);
    $brnch_strart_time_work = trim($_POST['brnch_strart_time_work']);
    $brnch_end_time_work = trim($_POST['brnch_end_time_work']);
    $brnch_number_phone = trim($_POST['brnch_number_phone']);
    $brnch_city = trim($_POST['brnch_city']);
    $brnch_street = trim($_POST['brnch_street']);
    $brnch_home = trim($_POST['brnch_home']);

    $sql = "UPDATE branch 
    SET 
        brnch_strart_time_work = '$brnch_strart_time_work',
        brnch_end_time_work = '$brnch_end_time_work',
        brnch_number_phone = $brnch_number_phone,
        brnch_city = '$brnch_city',
        brnch_street = '$brnch_street',
        brnch_home = '$brnch_home'
    WHERE
    brnch_id = $brnch_id
    ";
    
    $db->exec($sql);
    header('Location: branch.php');
    
}   
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>

