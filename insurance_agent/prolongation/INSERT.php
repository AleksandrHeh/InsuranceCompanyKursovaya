<?php
require_once "../include_bd.php";
try
{
    $db = includeBD();
    $mpl_id = trim($_POST['mpl_id']);
    $cntr_id = $_POST['cntr_id'];
    $prln_date_begin_prologation = trim($_POST['prln_date_begin_prologation']);
    $prln_date_end_prologation = trim($_POST['prln_date_end_prologation']);
    $prln_cost = trim($_POST['prln_cost']);

    $data = array(
        ':mpl_id' => $mpl_id,
        ':cntr_id' => $cntr_id,
        ':prln_date_begin_prologation' => $prln_date_begin_prologation,
        ':prln_date_end_prologation' => $prln_date_end_prologation,
        ':prln_cost' => $prln_cost
    );

    $sql = "INSERT INTO prolongation
        (mpl_id, cntr_id, prln_date_begin_prologation, prln_date_end_prologation, prln_cost)
        VALUES
        (:mpl_id, :cntr_id, :prln_date_begin_prologation, :prln_date_end_prologation, :prln_cost)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: prolongation.php');
}
catch (PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>