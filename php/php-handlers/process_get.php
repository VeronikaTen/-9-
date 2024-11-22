<?php
header('Content-Type: text/html; charset=utf-8'); 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
 $age = htmlspecialchars($_GET['age']);
 echo "<h2>Полученные данные через GET:</h2>";
 echo "Воззраст: $age <br>";
}