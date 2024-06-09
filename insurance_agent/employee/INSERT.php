<?php
 require_once "../include_bd.php";
try
{
      $db=includeBD();
    $mpl_surname = trim($_POST['mpl_surname']);
    $mpl_name = trim($_POST['mpl_name']);
    $mpl_middlename = trim($_POST['mpl_middlename']);
    $mpl_number_phone = $_POST['mpl_number_phone'];

    $data = array(
        'mpl_surname' => $mpl_surname,
        'mpl_name' => $mpl_name,
        'mpl_middlename' => $mpl_middlename,
        'mpl_number_phone' => $mpl_number_phone
    );  

    
    $sql = "INSERT INTO employee
    (mpl_surname, mpl_name, mpl_middlename, mpl_number_phone)
    VALUES
    (:mpl_surname, :mpl_name, :mpl_middlename,:mpl_number_phone)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: employee.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
