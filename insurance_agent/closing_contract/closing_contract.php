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
        <h1>Закрытые договора</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
            <input type="text" name="cntr_id" placeholder="ID контракта">
            <input type="text" name="mpl_id" placeholder="ID сотрудника">
            <input type="date" name="cls_cntrct_end_data" placeholder="Дата закрытия">
            <input type="text" name="cls_cntrct_reason" placeholder="Причина закрытия">
            <input type="text" name="cls_cost" placeholder="Выплата">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <!-- <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
            <input type="text" name="cntr_id" placeholder="Введите закрытый контракт">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
            <input type="text" name="cntr_id" placeholder="ID контракта">
            <input type="text" name="mpl_id" placeholder="ID сотрудника">
            <input type="date" name="cls_cntrct_end_data" placeholder="Дата закрытия<">
            <input type="text" name="cls_cntrct_reason" placeholder="Причина закрытия">
            <input type="text" name="cls_cost" placeholder="Выплата">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form> -->
    </div>

    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM closing_contract");
        $sth->execute();
    ?>
    
    <table>
	    <thead>
            <tr>
                <th>ID контракта</th>
                <th>ID сотрудника</th>
                <th>Дата закрытия</th>
                <th>Причина закрытия</th>
                <th>Выплата</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
			<td><?php echo $row["cntr_id"]; ?></td>
			<td><?php echo $row["mpl_id"]; ?></td>
			<td><?php echo $row["cls_cntrct_end_data"]; ?></td>
            <td><?php echo $row["cls_cntrct_reason"]; ?></td>
			<td><?php echo $row["cls_cost"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
   
</body>
</html>