<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reports.css">
</head>

<body>
    <header>
        <h1><a href="../index.php">Главная</a></h1>
        <h1>Поиск договоров по марки автомобиля</h1>
    </header>

    <h3>Введите марку автомобиля:</h3>
    <form action="reports2.php" method="POST">
        <input type="input" name="cr_brand" placeholder="Марка автомобиля">
        <button type="submit" class="btn btn-success" value="false"><p>Найти</p></button>
    </form>
    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $cr_brand = $_POST['cr_brand'];
        $sth = $conn->prepare("SELECT *
        FROM contract cnt
        JOIN car cr ON cnt.vin = cr.vin
        WHERE cr.cr_brand = '$cr_brand'");
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>ID</th>
                <th>Тип страховки</th>
                <th>VIN-код</th>
                <th>ID сотрудника</th>
                <th>ID владельца</th>
                <th>ID филиала</th>
                <th>Начало страховки</th>
                <th>Конец страховки</th>
                <th>Коэффициент лимита</th>
                <th>Коэффициент периода</th>
                <th>Стоимость</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($list as $row): ?>
		<tr>
			<td><?php echo $row["cntr_id"]; ?></td>
			<td><?php echo $row["tpnsr_insurance_number"]; ?></td>
			<td><?php echo $row["vin"]; ?></td>
            <td><?php echo $row["mpl_id"]; ?></td>
			<td><?php echo $row["wnr_id"]; ?></td>
			<td><?php echo $row["brnch_id"]; ?></td>
            <td><?php echo $row["cntr_begin_data"]; ?></td>
			<td><?php echo $row["cntr_end_data"]; ?></td>
			<td><?php echo $row["cntrl_coeficient_limitation"]; ?></td>
            <td><?php echo $row["cntrl_coeficient_period"]; ?></td>
            <td><?php echo $row["cntrl_cost_insurance"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>


    
    
   
</body>
</html>