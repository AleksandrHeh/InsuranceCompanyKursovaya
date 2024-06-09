<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="car.css">
</head>
<body>
    <header>
        <h1><a href="../index.php">Главная</a></h1>
        <h1>Машины</h1>
    </header>
    <?php
    require_once "../include_bd.php";
    try {
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM car");
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
            <input type="text" name="vin" placeholder="VIN">
            <input type="text" name="cr_brand" placeholder="Модель">
            <input type="text" name="cr_model" placeholder="Марка">
            <input type="text" name="cr_state_sign" placeholder="Гос номер">
            <input type="text" name="cr_year_release" placeholder="Год выпуска">
            <input type="text" name="cr_power_coefficient" placeholder="КМ">
            <input type="text" name="cr_seasonality_coefficient" placeholder="КС">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
            <input type="text" name="cr_state_sign" placeholder="VIN">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
            <input type="text" name="vin" placeholder="VIN">
            <input type="text" name="cr_brand" placeholder="Модель">
            <input type="text" name="cr_model" placeholder="Марка">
            <input type="text" name="cr_state_sign" placeholder="Гос номер">
            <input type="text" name="cr_year_release" placeholder="Год выпуска">
            <input type="text" name="cr_power_coefficient" placeholder="КМ">
            <input type="text" name="cr_seasonality_coefficient" placeholder="КС">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form>
    </div>
    
    
    <table class="table_">
	    <thead>
            <tr>
                <th>VIN</th>
                <th>Модель</th>
                <th>Марка</th>
                <th>Гос номер</th>
                <th>Год выпуска</th>
                <th>КМ</th>
                <th>КС</th>

            </tr>
	    </thead>
	<tbody>
		<?php foreach ($list as $row): ?>
		<tr>
			<td><?php echo $row["vin"]; ?></td>
			<td><?php echo $row["cr_brand"]; ?></td>
            <td><?php echo $row["cr_model"]; ?></td>
            <td><?php echo $row["cr_state_sign"]; ?></td>
            <td><?php echo $row["cr_year_release"]; ?></td>
            <td><?php echo $row["cr_power_coefficient"]; ?></td>
            <td><?php echo $row["cr_seasonality_coefficient"]; ?></td>

		</tr>
		<?php endforeach; ?>    
	</tbody>
    </table>

   
    <script src="car.js"></script>
</body>
</html>