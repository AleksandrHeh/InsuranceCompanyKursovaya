<?php
 require_once "../include_bd.php";
try
{
    $db=includeBD();
    $drvr_surname = trim($_POST['drvr_surname']);
    $drvr_name = trim($_POST['drvr_name']);
    $drvr_middlename = trim($_POST['drvr_middlename']);
    $drvr_birthday = trim($_POST['drvr_birthday']);
    $drvr_date_receipt_first_referen = trim($_POST['drvr_date_receipt_first_referen']);
    $drvr_seria_driver_license = trim($_POST['drvr_seria_driver_license']);
    $drvr_number_driver_license = trim($_POST['drvr_number_driver_license']);
    $drvr_coefficient_bonus_malus = trim($_POST['drvr_coefficient_bonus_malus']);
    $drvr_coefficient_experience_age = trim($_POST['drvr_coefficient_experience_age']);

    $data = array(
        'drvr_surname' => $drvr_surname,
        'drvr_name' => $drvr_name,
        'drvr_middlename' => $drvr_middlename,
        'drvr_birthday' => $drvr_birthday,
        'drvr_date_receipt_first_referen' => $drvr_date_receipt_first_referen,
        'drvr_seria_driver_license' => $drvr_seria_driver_license,
        'drvr_number_driver_license' => $drvr_number_driver_license,
        'drvr_coefficient_bonus_malus' => $drvr_coefficient_bonus_malus,
        'drvr_coefficient_experience_age' => $drvr_coefficient_experience_age
    );  

    
    $sql = "INSERT INTO driver
    (drvr_surname, drvr_name, drvr_middlename, drvr_birthday, drvr_date_receipt_first_referen,
    drvr_seria_driver_license,drvr_number_driver_license,drvr_coefficient_bonus_malus,
    drvr_coefficient_experience_age) 
    VALUES
    (:drvr_surname, :drvr_name, :drvr_middlename, :drvr_birthday,:drvr_date_receipt_first_referen
    ,:drvr_seria_driver_license,:drvr_number_driver_license,:drvr_coefficient_bonus_malus,:drvr_coefficient_experience_age)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: driver.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
