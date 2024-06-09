<?php
 require_once "../include_bd.php";
try
{
    $db=includeBD();
    $wnr_surname = trim($_POST['wnr_surname']);
    $wnr_name = trim($_POST['wnr_name']);
    $wnr_midlename = trim($_POST['wnr_midlename']);
    $wnr_floor = $_POST['wnr_floor'];
    $wnr_passport_series = $_POST['wnr_passport_series'];
    $wnr_passport_number = trim($_POST['wnr_passport_number']);
    $wnr_city_residence = trim($_POST['wnr_city_residence']);
    $wnr_locality_residence = trim($_POST['wnr_locality_residence']);
    $wnr_number_phone = trim($_POST['wnr_number_phone']);
    $wnr_email = trim($_POST['wnr_email']);
    $wnr_teritorial_coeficent = trim($_POST['wnr_teritorial_coeficent']);

    $data = array(
        'wnr_surname' => $wnr_surname,
        'wnr_name' => $wnr_name,
        'wnr_midlename' => $wnr_midlename,
        'wnr_floor' => $wnr_floor,
        'wnr_passport_series' => $wnr_passport_series,
        'wnr_passport_number' => $wnr_passport_number,
        'wnr_city_residence' => $wnr_city_residence,
        'wnr_locality_residence' => $wnr_locality_residence,
        'wnr_number_phone' => $wnr_number_phone,
        'wnr_email' => $wnr_email,
        'wnr_teritorial_coeficent' => $wnr_teritorial_coeficent,
    );  

    
    $sql = "INSERT INTO owner
    (wnr_surname, wnr_name, wnr_midlename, wnr_floor, 
    wnr_passport_series, wnr_passport_number, wnr_city_residence, wnr_locality_residence,
    wnr_number_phone,wnr_email,wnr_teritorial_coeficent) 
    VALUES
    (:wnr_surname, :wnr_name, :wnr_midlename,:wnr_floor ,:wnr_passport_series,
     :wnr_passport_number, :wnr_city_residence,:wnr_locality_residence
     ,:wnr_number_phone ,:wnr_email ,:wnr_teritorial_coeficent)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: owner.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
