<?php
require_once "../vendor/connect.php";
session_start();

$id = $_GET['id'];
$login = $_GET['login'];

if ($_SESSION['role']=='admin')
{
	mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
	$_SESSION['message'] = "Пользователь ".$login." удалён!";
	header("Location: ../profiles/admin.php");

}
else
{
	header ("Location: ../errors/ERROR_403.php");
}

?>