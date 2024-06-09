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
        <h1>Страховые случаи</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
            <input type="text" name="cntr_id" placeholder="Номер договора">
            <input type="date" name="nsrn_date" placeholder="Дата">
            <input type="text" name="nsrn_description" placeholder="Описание">
            <input type="text" name="nsrn_cost" placeholder="Выплата">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
        <input type="text" name="mpl_id" placeholder="ID сотрудника">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
            <input type="text" name="nsr_id" placeholder="Номер страхового случая">
            <input type="text" name="cntr_id" placeholder="Номер договора">
            <input type="date" name="nsrn_date" placeholder="Дата">
            <input type="text" name="nsrn_description" placeholder="Описание">
            <input type="text" name="nsrn_cost" placeholder="Выплата">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form>
    </div>

    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM insurance_case");
        $sth->execute();
    ?>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>ID</th>
                <th>Номер договора</th>
                <th>Дата</th>
                <th>Описание</th>
                <th>Выплата</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
			<td><?php echo $row["nsr_id"]; ?></td>
			<td><?php echo $row["cntr_id"]; ?></td>
			<td><?php echo $row["nsrn_date"]; ?></td>
            <td><?php echo $row["nsrn_description"]; ?></td>
			<td><?php echo $row["nsrn_cost"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
   
</body>
</html>