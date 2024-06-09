<?php
 require_once "../include_bd.php";
try
{
      $db=includeBD();
    $tpnsr_insurance_number = trim($_POST['tpnsr_insurance_number']);
    $vin = trim($_POST['vin']);
    $mpl_id = trim($_POST['mpl_id']);
    $wnr_id = trim($_POST['wnr_id']);
    $brnch_id = trim($_POST['brnch_id']);
    $cntr_begin_data = $_POST['cntr_begin_data'];
    $cntr_end_data = $_POST['cntr_end_data'];
    $cntrl_coeficient_limitation = trim($_POST['cntrl_coeficient_limitation']);
    $cntrl_coeficient_period = trim($_POST['cntrl_coeficient_period']);
    $cntrl_cost_insurance = trim($_POST['cntrl_cost_insurance']);

    $data = array(
        'tpnsr_insurance_number' => $tpnsr_insurance_number,
        'vin' => $vin,
        'mpl_id' => $mpl_id,
        'wnr_id' => $wnr_id,
        'brnch_id' => $brnch_id,
        'cntr_begin_data' => $cntr_begin_data,
        'cntr_end_data' => $cntr_end_data,
        'cntrl_coeficient_limitation' => $cntrl_coeficient_limitation,
        'cntrl_coeficient_period' => $cntrl_coeficient_period,
        'cntrl_cost_insurance' => $cntrl_cost_insurance,
    );  

    
    $sql = "INSERT INTO contract
    (tpnsr_insurance_number, vin, mpl_id, wnr_id, brnch_id, cntr_begin_data, 
    cntr_end_data, cntrl_coeficient_limitation, cntrl_coeficient_period, cntrl_cost_insurance) 
    VALUES
    (:tpnsr_insurance_number, :vin, :mpl_id, :wnr_id, :brnch_id,:cntr_begin_data ,:cntr_end_data,
     :cntrl_coeficient_limitation, :cntrl_coeficient_period,:cntrl_cost_insurance)";

    $stmt = $db->prepare($sql);
    // Выполняем запрос
    $stmt->execute($data);
    header('Location: contract.php');
}
    // Закрываем соединение
    catch(PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
?>
