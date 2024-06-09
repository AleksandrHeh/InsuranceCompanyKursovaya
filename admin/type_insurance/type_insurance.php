<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="type_insurance.css">
</head>
<body>

    <header>
        <h1><a href="../index.php">Главная</a></h1>
        <h1>Тип страховки</h1>
    </header>
    
    <?php
    require_once "../include_bd.php";
    try {
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM type_insurance");
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
    ?>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
            <input type="text" name="tpnsr_insurance_number" placeholder="Номер типа страховки">
            <input type="text" name="tpnsr_type_of_insurance" placeholder="Название страховки">
            <input type="text" name="tpnsr_bsic_rate" placeholder="Стоимость страховки">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
            <input type="text" name="tpnsr_insurance_number" placeholder="Номер типа страховки">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
            <input type="text" name="tpnsr_insurance_number" placeholder="Номер типа страховки">
            <input type="text" name="tpnsr_type_of_insurance" placeholder="Название страховки">
            <input type="text" name="tpnsr_bsic_rate" placeholder="Стоимость страховки">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form>
    </div>
    
    
    <table class="table_type_insurance">
	    <thead>
            <tr>
                <th>Номер типа страховки</th>
                <th>Название страховки</th>
                <th>Базовая стоимость страховки</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($list as $row): ?>
		<tr>
			<td><?php echo $row["tpnsr_insurance_number"]; ?></td>
			<td><?php echo $row["tpnsr_type_of_insurance"]; ?></td>
            <td><?php echo $row["tpnsr_bsic_rate"]; ?></td>
		</tr>
		<?php endforeach; ?>    
	</tbody>
    </table>

   
    <script src="type_insurance.js"></script>
</body>
</html>