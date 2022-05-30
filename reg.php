<?php 
  session_start();
  ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Authorization and Registration</title>
</head>
<body>
  <div class="wrapper">
  <div class="container">
  <h1>Регистрация пользователя</h1>
  <form  class="form" action="register.php" method="post">
    <span class="form__name">Логин</span>
    <span class="error"><?php echo $_SESSION["error_login"];?></span>
    <input type="text" name="login" value="<?= $_SESSION["login"]?>">
    <span class="form__name">Пароль</span>
    <span class="error"><?php echo $_SESSION["error_password"];?></span>
    <input type="password" name="password" value="<?= $_SESSION["login"]?>">
    <span class="form__name">Почта</span>
    <span class="error"><?php echo $_SESSION["error_email"];?></span>
    <input type="email" name="email" value="<?= $_SESSION["email"]?>" >
    <input class="button" type="submit" value="Зарегистрироваться" >
    <span class="success">Есть аккаунт? <a href="index.php"> Войти </a></span>
    <span class="success"><?php echo $_SESSION["success"];?></span>
    <span class="success"><?php echo $_SESSION["error"];?></span>
  </form>
  </div>
    <footer class="footer">Сайт &copy</footer>
  </div>
</body>
</html>