<?php

session_start();

$_SESSION["error_login"] = "";
$_SESSION["error_password"] = "";
$_SESSION["error_email"] = "";
$_SESSION["success"] = "";
$_SESSION["error"] = "";

$login = htmlspecialchars(trim($_POST["login"]));
$password = htmlspecialchars(trim($_POST["password"]));
$email = htmlspecialchars(trim($_POST["email"]));

if (strlen($login) <= 4) {
  $_SESSION["error_login"] = "Вы ввели слишком короткое имя";
  } else if (strlen($password) <= 4) {
  $_SESSION["error_password"] = "Вы ввели слишком простой пароль";
  } else if (strlen($email) <= 4) {
    $_SESSION["error_email"] = "Вы не указали e-mail";
  } else {
    $password = md5($password);
    $mysql =  new mysqli("localhost", "mysql", "mysql", "reg");
    $checkbd = $mysql->query("SELECT * FROM `users` WHERE username = '$login' OR email='$email'");
    if (!$checkbd->num_rows) {
    $mysql->query("INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$login', '$password', '$email')");
    $mysql->close();
    $_SESSION["success"] = "Вы успешно зарегистрировались!";
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
    $_SESSION["email"] = $email;
    } else
    $_SESSION["error"] = "Такой аккаунт зарегистрирован!";
  }
  
  header("Location: reg.php");
  exit();


?>