<?php
require_once "../include_bd.php";
try {
    $db = includeBD();
    $wnr_passport_series = trim($_POST['wnr_passport_series']);
    $wnr_passport_number = trim($_POST['wnr_passport_number']);

    $sql = "DELETE FROM owner WHERE wnr_passport_series = :wnr_passport_series AND wnr_passport_number = :wnr_passport_number";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':wnr_passport_series', $wnr_passport_series);
    $stmt->bindParam(':wnr_passport_number', $wnr_passport_number);

    $stmt->execute();
    header('Location: owner.php');
} catch (PDOException $e) {
    echo "Ошибка при удалении записи из базы данных: " . $e->getMessage();
}
$db = null;
?>