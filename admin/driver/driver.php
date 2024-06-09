<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../form.css">
</head>

<body>
    <header>
        <h1><a href="../index.php">Главная</a></h1>
        <h1>Водители</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
            <input type="text" name="drvr_surname" placeholder="Фамилия">
            <input type="text" name="drvr_name" placeholder="Имя">
            <input type="text" name="drvr_middlename" placeholder="Отчество">
            <input type="date" name="drvr_birthday" placeholder="День рождения">
            <input type="date" name="drvr_date_receipt_first_referen" placeholder="Дата получения первых прав">
            <input type="text" name="drvr_seria_driver_license" placeholder="Серия прав">
            <input type="text" name="drvr_number_driver_license" placeholder="Номер прав">
            <input type="text" name="drvr_coefficient_bonus_malus" placeholder="КБМ">
            <input type="text" name="drvr_coefficient_experience_age" placeholder="КВС">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
            <input type="text" name="drvr_id" placeholder="id водителя">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
        <input type="text" name="drvr_id" placeholder="ID водителя">
            <input type="text" name="drvr_surname" placeholder="Фамилия">
            <input type="text" name="drvr_name" placeholder="Имя">
            <input type="text" name="drvr_middlename" placeholder="Отчество">
            <input type="date" name="drvr_birthday" placeholder="День рождения">
            <input type="date" name="drvr_date_receipt_first_referen" placeholder="Дата получения первых прав">
            <input type="text" name="drvr_seria_driver_license" placeholder="Серия прав">
            <input type="text" name="drvr_number_driver_license" placeholder="Номер прав">
            <input type="text" name="drvr_coefficient_bonus_malus" placeholder="КБМ">
            <input type="text" name="drvr_coefficient_experience_age" placeholder="КВС">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form>
    </div>

    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM driver");
        $sth->execute();
    ?>
    
    <table>
	    <thead>
            <tr>
                <th>ID водителя</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>День рождения</th>
                <th>Дата получения первых прав</th>
                <th>Серия прав</th>
                <th>Номер прав</th>
                <th>КБМ</th>
                <th>КВС</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
			<td><?php echo $row["drvr_id"]; ?></td>
			<td><?php echo $row["drvr_surname"]; ?></td>
			<td><?php echo $row["drvr_name"]; ?></td>
            <td><?php echo $row["drvr_middlename"]; ?></td>
			<td><?php echo $row["drvr_birthday"]; ?></td>
            <td><?php echo $row["drvr_date_receipt_first_referen"]; ?></td>
            <td><?php echo $row["drvr_seria_driver_license"]; ?></td>
            <td><?php echo $row["drvr_number_driver_license"]; ?></td>
            <td><?php echo $row["drvr_coefficient_bonus_malus"]; ?></td>
            <td><?php echo $row["drvr_coefficient_experience_age"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
   
</body>
</html>