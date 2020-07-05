<?php 
session_start();
require_once "../vendor/connect.php";

$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$lang = $_POST['lang'];

if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password_confirm']) && !empty($_POST['name']) && !empty($_POST['surname']))
{
	if ($password==$password_confirm){
		mysqli_query ($connect, "INSERT INTO `users`(`id`, `login`, `password`, `name`, `surname`, `role`, `language`) VALUES (NULL,'$login','$password','$name','$surname', 1,'$lang')");
		$_SESSION['message'] = "Регистрация прошла успешно!";
		header('Location: ../index.php');
	}
	else
	{
		$_SESSION['message'] = "Пароли не совпадают!";
		header('Location: ../vendor/signup.php');
	}
}
else 
{
	$_SESSION['message'] = "Разве так трудно заполнить все поля? Выйди и зайди нормально!";
	header('Location: ../vendor/signup.php');
}
?>