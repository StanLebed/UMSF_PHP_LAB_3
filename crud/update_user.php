<?php 
require_once "../vendor/connect.php";
$id = $_POST['id'];
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$role = $_POST['role'];
$lang = $_POST['lang'];

	mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `password` = '$password', `name` = '$name', `surname` = '$surname', `role` = '$role', `language` = '$lang' WHERE `users`.`id` = '$id'");
	$_SESSION['message'] = "Изменения сохранены!";
	header('Location: ../index.php');
?>