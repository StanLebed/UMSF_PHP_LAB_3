<?php 
require_once "../vendor/connect.php";
session_start();

$id = $_POST['id'];
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$role = $_POST['role'];
$lang = $_POST['lang'];
if ($_SESSION['role']=='admin')
{
	if (!empty($login) && !empty($password) && !empty($name) && !empty($surname) && !empty($role))
	{
		mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `password` = '$password', `name` = '$name', `surname` = '$surname', `role` = '$role', `language` = '$lang' WHERE `users`.`id` = '$id'");
		$_SESSION['message'] = "Изменения сохранены!";
		header("Location: ../profiles/admin.php");
	}
	else 
	{
		$_SESSION['message'] = "ERROR! Необходимо заполнить все поля!";
		header("Location: ../profiles/admin.php");
	}
}
else
{
	header ("Location: ../errors/ERROR_403.php");
}

?>
