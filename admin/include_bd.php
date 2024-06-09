<?php

function includeBD(){
try {
    $dbname = 'InsuranceCompany';
/** @var string имя пользователя */
$username = 'postgres';
/** @var string пароль пользователя */
$password = 'BUGLb048';
/** @var string адрес базы данных */
$host = 'localhost';
/** @var int порт доступа к базе данных */
$port = 5432;
/** @var array дополнительные опции соединения с базой данных */
$options = [];

/** @var string формируем dsn для подключения */
$dsn = "pgsql:host=".$host.";port=".$port.";dbname=".$dbname;
/** @var PDO подключение к базе данных */
$db = new PDO($dsn,$username,$password, $options);
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

return $db;
}
?>