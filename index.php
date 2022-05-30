
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
  <h1>Авторизация пользователя</h1>
  <form  class="form" action="auths.php" method="post">
    <span class="form__name">Логин</span>
    <span class="error"><?php echo $_SESSION["error_login"];?></span>
    <input type="text" name="login" value="<?= $_SESSION["login"]?>">
    <span class="form__name">Пароль</span>
    <span class="error"><?php echo $_SESSION["error_password"];?></span>
    <input type="password" name="password" value="<?= $_SESSION["login"]?>">
    <input class="button" type="submit" value="Войти" >
    <span class="success red"><?php echo $_SESSION["errorauth"];?></span>
    <span class="success">Нет аккаунта? <a href="reg.php"> Зарегистрироваться </a></span>
  </form>
  </div>
    <footer class="footer">Сайт &copy</footer>
  </div>
</body>
</html>