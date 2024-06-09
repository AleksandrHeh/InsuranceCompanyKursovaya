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
        <h1>Договор-водитель</h1>
    </header>

    <div class="menu_button">
        <button id="insert"><p>Добавление</p></button>
        <form id="formInsert" action="INSERT.php" method="POST">
        <?php 
            
            $sth = $conn->prepare("SELECT * FROM vin_id_view");
            $sth->execute();

            // Инициализация пустого массива для данных
            $dataArray = array();

            // Обработка результатов запроса
            foreach ($sth as $row) {
                $key = $row['cntr_id'];
                $value = $row['vin'];
                $dataArray[$key] = $value;
            }
            echo '<select name="cntr_id">';
            foreach ($dataArray as $key => $value) {
                echo '<option value="' . $key . '">' . $value . '</option>';
            }
            echo '</select>';
?>
            <?php 
            
            $sth = $conn->prepare("SELECT * FROM driver_id_view");
            $sth->execute();

            // Инициализация пустого массива для данных
            $dataArray = array();

            // Обработка результатов запроса
            foreach ($sth as $row) {
                $key = $row['drvr_id'];
                $value = $row['ФИО водителя'];
                $dataArray[$key] = $value;
            }
            echo '<select name="drvr_id">';
            foreach ($dataArray as $key => $value) {
                echo '<option value="' . $key . '">' . $value . '</option>';
            }
            echo '</select>';
?>
            <button type="submit" class="btn btn-success"><p>Добавить</p></button>
        </form>
        </form>
    </div>

    <?php 
         require_once "../include_bd.php";
        $conn=includeBD();
        $sth = $conn->prepare("SELECT * FROM contract_driver_view");
        $sth->execute();
    ?>
    
    <table class="table_contract">
	    <thead>
            <tr>
                <th>VIN-код</t>
                <th>ФИО водителя</th>
                
            </tr>
	    </thead>
	<tbody>
		<?php foreach ($sth as $row): ?>
		<tr>
            <td><?php echo $row["VIN-код"]; ?></td>
			<td><?php echo $row["ФИО водителя"]; ?></td>
		</tr>
    
		<?php endforeach; ?>    
	</tbody>
    </table>
    <script src="../form.js"></script>
   
</body>
</html>