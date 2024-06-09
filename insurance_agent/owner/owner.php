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
        <h1>Собственники</h1>
    </header>

    <?php
    require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM owner");
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);
    ?>

<div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
            <form id="formInsert" action="INSERT.php" method="POST">
                    <input type="text" name="wnr_surname" placeholder="Фамилия">
                    <input type="text" name="wnr_name" placeholder="Имя">
                    <input type="text" name="wnr_midlename" placeholder="Отчество">
                    <input type="text" name="wnr_floor" placeholder="Пол">
                    <input type="text" name="wnr_passport_series" placeholder="Серия паспорта">
                    <input type="text" name="wnr_passport_number" placeholder="Номер паспорта">
                    <input type="text" name="wnr_city_residence" placeholder="Город прописки">
                    <input type="text" name="wnr_locality_residence" placeholder="Населённый пункт">
                    <input type="text" name="wnr_number_phone" placeholder="Номер телефон">
                    <input type="text" name="wnr_email" placeholder="Электронная почта">
                    <input type="text" name="wnr_teritorial_coeficent" placeholder="Территориальный коэффициент">
                    <button type="submit" class="btn btn-success" ><p>Добавить</p></button>
                </form>

        <!-- <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
                <input type="text" name="wnr_passport_series" placeholder="Серия паспорта">
                <input type="text" name="wnr_passport_number" placeholder="Номер паспорта">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
                <input type="text" name="wnr_surname" placeholder="Фамилия">
                <input type="text" name="wnr_name" placeholder="Имя">
                <input type="text" name="wnr_midlename" placeholder="Отчество">
                <input type="text" name="wnr_floor" placeholder="Пол">
                <input type="text" name="wnr_passport_series" placeholder="Серия паспорта">
                <input type="text" name="wnr_passport_number" placeholder="Номер паспорта">
                <input type="text" name="wnr_city_residence" placeholder="Город прописки">
                <input type="text" name="wnr_locality_residence" placeholder="Населённый пункт">
                <input type="text" name="wnr_number_phone" placeholder="Номер телефон">
                <input type="text" name="wnr_email" placeholder="Электронная почта">
                <input type="text" name="wnr_teritorial_coeficent" placeholder="Территориальный коэффициент">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form> -->
    </div>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Пол</th>
                <th>Серия паспорта</th>
                <th>Номер паспорта</th>
                <th>Город прописки</th>
                <th>Населённый пункт</th>
                <th>Номер телефона</th>
                <th>Электронная почта</th>
                <th>Территориальный коэффициент</th>
            </tr>
	    </thead>
	<tbody>
   
		<?php foreach ($list as $row): ?>
		<tr>
            <td><?php echo $row["wnr_surname"]; ?></td>
            <td><?php echo $row["wnr_name"]; ?></td>
			<td><?php echo $row["wnr_midlename"]; ?></td>
			<td><?php echo $row["wnr_floor"]; ?></td>
			<td><?php echo $row["wnr_passport_series"]; ?></td>
			<td><?php echo $row["wnr_passport_number"]; ?></td>
            <td><?php echo $row["wnr_city_residence"]; ?></td>
			<td><?php echo $row["wnr_locality_residence"]; ?></td>
			<td><?php echo $row["wnr_number_phone"]; ?></td>
            <td><?php echo $row["wnr_email"]; ?></td>
            <td><?php echo $row["wnr_teritorial_coeficent"]; ?></td>
		</tr>
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
</body>
</html>