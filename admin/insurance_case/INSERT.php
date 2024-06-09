<?php
 require_once "../include_bd.php";
try
{
      $db=includeBD();
    $cntr_id = trim($_POST['cntr_id']);
    $nsrn_date = trim($_POST['nsrn_date']);
    $nsrn_description = trim($_POST['nsrn_description']);
    $nsrn_cost = $_POST['nsrn_cost'];

    $data = array(
        'cntr_id' => $cntr_id,
        'nsrn_date' => $nsrn_date,
        'nsrn_description' => $nsrn_description,
        'nsrn_cost' => $nsrn_cost
    );  

    
    $sql = "INSERT INTO insurance_case
    (cntr_id, nsrn_date, nsrn_description, nsrn_cost)
    VALUES
    (:cntr_id, :nsrn_date, :nsrn_description,:nsrn_cost)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: insurance_case.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
