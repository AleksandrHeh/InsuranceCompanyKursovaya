<?php
 require_once "../include_bd.php";
try
{
    $db=includeBD();
    $brnch_strart_time_work = trim($_POST['brnch_strart_time_work']);
    $brnch_end_time_work = trim($_POST['brnch_end_time_work']);
    $brnch_number_phone = trim($_POST['brnch_number_phone']);
    $brnch_city = trim($_POST['brnch_city']);
    $brnch_street = $_POST['brnch_street'];
    $brnch_home = $_POST['brnch_home'];

    $data = array(
        'brnch_strart_time_work' => $brnch_strart_time_work,
        'brnch_end_time_work' => $brnch_end_time_work,
        'brnch_number_phone' => $brnch_number_phone,
        'brnch_city' => $brnch_city,
        'brnch_street' => $brnch_street,
        'brnch_home' => $brnch_home
    );  

    
    $sql = "INSERT INTO branch
    (brnch_strart_time_work, brnch_end_time_work, brnch_number_phone, brnch_city, brnch_street, 
    brnch_home) 
    VALUES
    (:brnch_strart_time_work, :brnch_end_time_work, :brnch_number_phone, :brnch_city,:brnch_street 
    ,:brnch_home)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: branch.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
