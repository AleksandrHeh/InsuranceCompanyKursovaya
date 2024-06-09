<?php
 require_once "../include_bd.php";
try
{
      $db=includeBD();
    $drvr_id = trim($_POST['drvr_id']);
    $cntr_id = trim($_POST['cntr_id']);

    $data = array(
        'drvr_id' => $drvr_id,
        'cntr_id' => $cntr_id
    );  

    
    $sql = "INSERT INTO contract_driver
    (drvr_id, cntr_id)
    VALUES
    (:drvr_id, :cntr_id)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: contract_driver.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
