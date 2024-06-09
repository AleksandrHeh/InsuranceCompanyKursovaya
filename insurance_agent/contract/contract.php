<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contract.css">
</head>

<?php
require_once "../include_bd.php";
$conn=includeBD();
?>

<body>
    <header>
        <h1><a href="../index.php">Главная</a></h1>
        <h1>Договоры</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
            <input type="text" name="tpnsr_insurance_number" placeholder="Тип страховки">
            <input type="text" name="vin" placeholder="VIN-код">
<?php 
            
            $sth = $conn->prepare("SELECT * FROM mpl_id_view");
            $sth->execute();

            // Инициализация пустого массива для данных
            $dataArray = array();

            // Обработка результатов запроса
            foreach ($sth as $row) {
                $key = $row['mpl_id'];
                $value = $row['ФИО сотрудника'];
                $dataArray[$key] = $value;
            }
            echo '<select name="mpl_id">';
            foreach ($dataArray as $key => $value) {
                echo '<option value="' . $key . '">' . $value . '</option>';
            }
            echo '</select>';
?>

            <?php 
             $sth = $conn->prepare("SELECT * FROM wnr_id_view");
             $sth->execute();
             $dataArray = array();
             // Обработка результатов запроса
             foreach ($sth as $row) {
                 $key = $row['wnr_id'];
                 $value = $row['ФИО собственника'];
                 $dataArray[$key] = $value;
             }
             echo '<select name="wnr_id">';
             foreach ($dataArray as $key => $value) {
                 echo '<option value="' . $key . '">' . $value . '</option>';
             }
             echo '</select>';
            ?>
           <?php 
             $sth = $conn->prepare("SELECT * FROM brnch_id_view");
             $sth->execute();
             $dataArray = array();
             // Обработка результатов запроса
             foreach ($sth as $row) {
                 $key = $row['brnch_id'];
                 $value = $row['Адрес филиала'];
                 $dataArray[$key] = $value;
             }
             echo '<select name="brnch_id">';
             foreach ($dataArray as $key => $value) {
                 echo '<option value="' . $key . '">' . $value . '</option>';
             }
             echo '</select>';
            ?>
            <input type="date" name="cntr_begin_data" placeholder="Начало страховки">
            <input type="date" name="cntr_end_data" placeholder="Конец страховки">
            <input type="text" name="cntrl_coeficient_limitation" placeholder="Коэффициент лимита">
            <input type="text" name="cntrl_coeficient_period" placeholder="Коэффициент периода">
            <input type="text" name="cntrl_cost_insurance" placeholder="Стоимость">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <!-- <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
        <input type="text" name="vin" placeholder="VIN-код">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
            <input type="text" name="vin" placeholder="VIN-код">
            <input type="text" name="tpnsr_insurance_number" placeholder="Тип страховки">
            <input type="text" name="mpl_id" placeholder="ID сотрудника">
            <input type="text" name="wnr_id" placeholder="ID владельца">
            <input type="text" name="brnch_id" placeholder="ID филиала">
            <input type="date" name="cntr_begin_date" placeholder="Начало страховки">
            <input type="date" name="cntr_end_date" placeholder="Конец страховки">
            <input type="text" name="cntrl_coeficient_limitation" placeholder="Коэффициент лимита">
            <input type="text" name="cntrl_coeficient_period" placeholder="Коэффициент периода<">
            <input type="text" name="cntrl_cost_insurance" placeholder="Стоимость">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button> -->
        </form>
    </div>

    <?php 
        require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM contract_view");
        $sth->execute();
    ?>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>Тип страховки</th>
                <th>VIN-код</th>
                <th>ФИО сотрудника</th>
                <th>ФИО владельца</th>
                <th>ID филиала</th>
                <th>Начало страховки</th>
                <th>Конец страховки</th>
                <th>Коэффициент лимита</th>
                <th>Коэффициент периода</th>
                <th>Стоимость</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
			<td><?php echo $row["Тип страховки"]; ?></td>
			<td><?php echo $row["VIN-код"]; ?></td>
            <td><?php echo $row["ФИО сотрудника"]; ?></td>
			<td><?php echo $row["ФИО владельца"]; ?></td>
			<td><?php echo $row["Адрес филиала"]; ?></td>
            <td><?php echo $row["Начало страховки"]; ?></td>
			<td><?php echo $row["Конец страховки"]; ?></td>
			<td><?php echo $row["Коэффициент лимита"]; ?></td>
            <td><?php echo $row["Коэффициент периода"]; ?></td>
            <td><?php echo $row["Стоимость"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="contract.js"></script>
   
</body>
</html>