<?php 
session_start();
require_once "connect.php";
require "classes.php";

$LOGIN  = $_POST['login'];
$PASSWORD = $_POST['password'];
$SUBMIT = $_POST['submit'];

if (!empty($LOGIN) && !empty($PASSWORD)) {
	$CHECK = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$LOGIN' AND `password` = '$PASSWORD' ");
	if(mysqli_num_rows($CHECK)>0)
	{
		$user = mysqli_fetch_assoc($CHECK);

		$_SESSION['id'] = $user['id'];
		$_SESSION['name'] = $user['name'];
		$_SESSION['surname'] = $user['surname'];
		$_SESSION['lang'] = $user['language'];

		switch($user['role'])
		{
			case 1: $_SESSION['role'] = "client"; break;
			case 2: $_SESSION['role'] = "manager"; break;
			case 3: $_SESSION['role'] = "admin"; 	break;
		}
		header("Location: ../profiles/".strtolower($_SESSION['role']).".php");
	}
	else
	{
		$_SESSION['message'] = "Чёт не припомню в своей базе данных таких типов. Ты зашёл не в тот райончик, дружок. (Если уверен в своих силах, попробуй проверить логин или пароль)";
		header('Location: ../index.php');
	}
}
else 
{
	$_SESSION['message'] = "ERROR! Разве так трудно заполнить все поля? Выйди и зайди нормально!";
	header('Location: ../index.php');
}
?>
