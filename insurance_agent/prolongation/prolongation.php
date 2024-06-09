<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../form.css">
</head>
<?php
require_once "../include_bd.php";
$conn=includeBD();
?>


<body>
    <header>
        <h1><a href="../index.php">Главная</a></h1>
        <h1>Пролонгация</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
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
            <input type="text" name="cntr_id" placeholder="Номер договора">
            <input type="date" name="prln_date_begin_prologation" placeholder="Дата начала">
            <input type="date" name="prln_date_end_prologation" placeholder="Дата конца">
            <input type="text" name="prln_cost" placeholder="Стоимость">
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>

        <!-- <button id="delete"><p>Удаление</p></button>
        <form id="formDelete" action="DELETE.php" method="POST">
        <input type="text" name="cntr_id" placeholder="Номера договора">
            <button type="submit" class="btn btn-success"><p>Удалить</p></button>
        </form>

        <button id="update"><p>Изменение</p></button>
        <form id="formUpdate" action="UPDATE.php" method="POST">
        
      
            <input type="text" name="cntr_id" placeholder="Номер договора">
            <input type="date" name="prln_date_begin_prologation" placeholder="Дата начала">
            <input type="date" name="prln_date_end_prologation" placeholder="Дата конца">
            <input type="text" name="prln_cost" placeholder="Стоимость">
            <button type="submit" class="btn btn-success" id="buttonUPDATE"><p>Изменить</p></button>
        </form> -->
    </div>

    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM prolongation_view");
        $sth->execute();
    ?>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>ФИО сотрудника</th>
                <th>Номер договора</th>
                <th>Начало страховки</th>
                <th>Конец страховки</th>
                <th>Стоимость</th>
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
			<td><?php echo $row["ФИО сотрудника"]; ?></td>
			<td><?php echo $row["Номер договора"]; ?></td>
			<td><?php echo $row["Начало страховки"]; ?></td>
            <td><?php echo $row["Конец страховки"]; ?></td>
			<td><?php echo $row["Стоимость"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
   
</body>
</html>