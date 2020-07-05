<?php 
require_once "connect.php";

$user_id = $_GET['id'];
$user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");
$user = mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактирование пользователя</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h2>Редактирование пользователя</h2>
	<div class="update_form">
		<form action="../crud/update_user.php" method="POST">
			<input type="hidden" name="id" value="$user['id']">
			<input type="text" name="login" value="<?= $user['login']?>">
			<input type="text" name="password" value="<?= $user['password']?>">
			<input type="text" name="name" value="<?= $user['name']?>">
			<input type="text" name="surname" value="<?= $user['surname']?>">
			<input type="text" name="role" value="<?= $user['role']?>">
			<input type="text" name="lang" value="<?= $user['language']?>">
			<button class="button" type="submit">Сохранить</button>
		</form>
	</div>
</body>
</html>
