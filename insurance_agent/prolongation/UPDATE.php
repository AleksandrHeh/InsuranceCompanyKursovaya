<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../include_bd.php";

try {
    $db = includeBD();
    $mpl_id = trim($_POST['mpl_id']);
    $cntr_id = trim($_POST['cntr_id']);
    $prln_date_begin_prologation = trim($_POST['prln_date_begin_prologation']);
    $prln_date_end_prologation = trim($_POST['prln_date_end_prologation']);
    $prln_cost = $_POST['prln_cost'];

    $sql = "UPDATE prolongation 
            SET 
            mpl_id = :mpl_id,
            prln_date_begin_prologation = :prln_date_begin_prologation, 
            prln_date_end_prologation = :prln_date_end_prologation, 
            prln_cost = :prln_cost
            WHERE 
            cntr_id = :cntr_id";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':mpl_id', $mpl_id);
    $stmt->bindParam(':prln_date_begin_prologation', $prln_date_begin_prologation);
    $stmt->bindParam(':prln_date_end_prologation', $prln_date_end_prologation);
    $stmt->bindParam(':prln_cost', $prln_cost);
    $stmt->bindParam(':cntr_id', $cntr_id);

    $stmt->execute();
    header('Location: prolongation.php');
} catch (PDOException $e) {
    echo "Ошибка при обновлении записи в базе данных: " . $e->getMessage();
}
$db = null;
?>