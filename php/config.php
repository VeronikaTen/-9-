<?php
header('Content-Type: text/html; charset=utf-8'); //
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "is_ten";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
echo "Подключение процедурного MYSQLi - удачно <br>";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
echo "Подключение объектного MySQLi - удачно <br>";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Подключение PDO - удачно <br>";
} catch (PDOException $e) {
  echo "Ошибка подключения: " . $e->getMassege();  
}
?>