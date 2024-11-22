<!DOCTYPE html>
header('Content-Type: text/html; charset=utf-8'); //

<html lang="ru">
<head>
 <meta charset="utf-8">
 <title>Форма POST</title>
</head>
<body>
  <p>[Это форма созданная для проверки $_POST]</p>
  <form action="php/php-handlers/process_post.php" method="post">
  <label for="name">Имя:</label>
  <input type="text" name="name" id="name" required><br>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br>
  <input type="submit" value="Отправитель">
  </form>
  <br>
  <p>[Это форма создания для проверки $_GET]</p>
  <form action="php/php-handlers/process_get.php" method="get">
  <label for="age">Возраст:</label>
  <input type="text" name="age" id="age" required><br>
  <input type="submit" value="Отправитель"> 
  </form>
  <br>
  <p>[Это форма созданная для проверки $_REQUEST]</p>
  <form action="php/php-handlers/process_request.php" method="post">
   <label for="username">Имя пользователя:</label>
   <input type="text" name="username" id="username" required><br>
   <label for="pasword">Пароль:</label>
   <input type="password" name="password" id="password" required><br>
   <input type="submit" value="Отправить">
  </form>
</body>
</html>