<?php
header('Content-Type: text/html; charset=utf-8'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = htmlspecialchars($_POST['name']);
 $email = htmlspecialchars($_POST['email']);
 echo "<h2>Полученные данные через POST:</h2>";
 echo "Имя: $name <br>";
 echo "Email: $email <br>";
}
?>