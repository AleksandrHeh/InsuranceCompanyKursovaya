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
        <h1>Филиалы</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
            <input type="time" name="brnch_strart_time_work" placeholder="Время начала работы">
            <input type="time" name="brnch_end_time_work" placeholder="Время конца работы">
            <input type="text" name="brnch_number_phone" placeholder="Номер телефона">
            <input type="text" name="brnch_city" placeholder="Город">
            <input type="text" name="brnch_street" placeholder="Улица">
            <input type="text" name="brnch_home" placeholder="Дом">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
            <input type="text" name="brnch_id" placeholder="id филиала">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
            <input type="text" name="brnch_id" placeholder="id филиала">
            <input type="time" name="brnch_strart_time_work" placeholder="Время начала работы">
            <input type="time" name="brnch_end_time_work" placeholder="Время конца работы">
            <input type="text" name="brnch_number_phone" placeholder="Номер телефона">
            <input type="text" name="brnch_city" placeholder="Город">
            <input type="text" name="brnch_street" placeholder="Улица">
            <input type="text" name="brnch_home" placeholder="Дом">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form>
    </div>

    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM branch");
        $sth->execute();
    ?>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>ID</th>
                <th>Время начала работы</th>
                <th>Время конца работы</th>
                <th>Номер телефона</th>
                <th>Город</th>
                <th>Улица</th>
                <th>Дом</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
			<td><?php echo $row["brnch_id"]; ?></td>
			<td><?php echo $row["brnch_strart_time_work"]; ?></td>
			<td><?php echo $row["brnch_end_time_work"]; ?></td>
            <td><?php echo $row["brnch_number_phone"]; ?></td>
			<td><?php echo $row["brnch_city"]; ?></td>
			<td><?php echo $row["brnch_street"]; ?></td>
            <td><?php echo $row["brnch_home"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
   
</body>
</html>