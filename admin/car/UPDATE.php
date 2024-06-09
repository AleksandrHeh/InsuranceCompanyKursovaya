<?php
 require_once "../include_bd.php";
try
{
    //if(isset($_POST["type_insurance"]) && isset($_POST["VIN"]) && isset($_POST["mpl_id"]) && isset($_POST["wnr_id"]) && isset($_POST["brnch_id"]) && isset($_POST["cntr_begin_date"]) && isset($_POST["cntr_end_date"]) && isset($_POST["cntrl_coeficient_limitation"]) && isset($_POST["cntrl_coeficient_period"]) && isset($_POST["cntrl_cost_insurance"]))
    $db=includeBD();
   
    $vin = trim($_POST['vin']);
    $cr_brand = trim($_POST['cr_brand']);
    $cr_model = trim($_POST['cr_model']);
    $cr_state_sign = trim($_POST['cr_state_sign']);
    $cr_year_release = trim($_POST['cr_year_release']);
    $cr_power_coefficient = trim($_POST['cr_power_coefficient']);
    $cr_seasonality_coefficient = trim($_POST['cr_seasonality_coefficient']);

    $data = array(
        'vin' => $vin,
        'cr_brand' => $cr_brand,
        'cr_model' => $cr_model,
        'cr_state_sign' => $cr_state_sign,
        'cr_year_release' => $cr_year_release,
        'cr_power_coefficient' => $cr_power_coefficient,
        'cr_seasonality_coefficient' => $cr_seasonality_coefficient
    );  

   
    $sql = "INSERT INTO car
    (vin, cr_brand, cr_model, cr_state_sign, cr_year_release, cr_power_coefficient, cr_seasonality_coefficient) 
    VALUES
    (:vin, :cr_brand, :cr_model, :cr_state_sign, :cr_year_release, :cr_power_coefficient, :cr_seasonality_coefficient)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: car.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;


?>
