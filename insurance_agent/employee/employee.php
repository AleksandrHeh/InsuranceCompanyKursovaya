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
        <h1>Сотрудники</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
            <input type="text" name="mpl_surname" placeholder="Фамилия">
            <input type="text" name="mpl_name" placeholder="Имя">
            <input type="text" name="mpl_middlename" placeholder="Отчество">
            <input type="text" name="mpl_number_phone" placeholder="Номер телефона">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
        <input type="text" name="mpl_id" placeholder="ID сотрудника">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
            <input type="text" name="mpl_id" placeholder="ID сотрудника">
            <input type="text" name="mpl_surname" placeholder="Фамилия">
            <input type="text" name="mpl_name" placeholder="Имя">
            <input type="text" name="mpl_middlename" placeholder="Отчество">
            <input type="text" name="mpl_number_phone" placeholder="Номер телефона">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form>
    </div>

    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM employee");
        $sth->execute();
    ?>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>ID</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчесвто</th>
                <th>Номер телефона</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
			<td><?php echo $row["mpl_id"]; ?></td>
			<td><?php echo $row["mpl_surname"]; ?></td>
			<td><?php echo $row["mpl_name"]; ?></td>
            <td><?php echo $row["mpl_middlename"]; ?></td>
			<td><?php echo $row["mpl_number_phone"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
   
</body>
</html>