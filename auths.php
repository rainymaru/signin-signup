<?php
session_start();

$login = htmlspecialchars(trim($_POST["login"]));
$password = htmlspecialchars(trim($_POST["password"]));
$_SESSION["errorauth"] = "";

$password = md5($password);

$mysql =  new mysqli("localhost", "mysql", "mysql", "reg");
$checkauth = $mysql->query("SELECT * FROM `users` WHERE username = '$login' AND password='$password'");

if ($checkauth->num_rows) {
  echo 'Вы вошли';
} else {
  $_SESSION["errorauth"] = "Неверный логин или пароль";
  header("Location: index.php");
}
$mysql->close();
exit();


?>