<?php
 require_once "../include_bd.php";
try
{
    $db=includeBD();
    $cntr_id = trim($_POST['cntr_id']);
    $mpl_id = trim($_POST['mpl_id']);
    $cls_cntrct_end_data = trim($_POST['cls_cntrct_end_data']);
    $cls_cntrct_reason = trim($_POST['cls_cntrct_reason']);
    $cls_cost = trim($_POST['cls_cost']);

    $data = array(
        'cntr_id' => $cntr_id,
        'mpl_id' => $mpl_id,
        'cls_cntrct_end_data' => $cls_cntrct_end_data,
        'cls_cntrct_reason' => $cls_cntrct_reason,
        'cls_cost' => $cls_cost,
    );  

    
    $sql = "INSERT INTO closing_contract
    (cntr_id, mpl_id, cls_cntrct_end_data, cls_cntrct_reason, cls_cost) 
    VALUES
    (:cntr_id, :mpl_id, :cls_cntrct_end_data, :cls_cntrct_reason,:cls_cost)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: closing_contract.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
