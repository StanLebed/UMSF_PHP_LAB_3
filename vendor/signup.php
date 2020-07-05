<?php 
session_start();

if(!empty($_SESSION['name']))
{
	header("Location: profiles/".strtolower($_SESSION['role']).".php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="wrapper">
		<h1>Какой-то непонятный сайт</h1>
		<h2 class="signup_title">Регистрация</h2>
		<div class="signupForm loginForm">
			<form action="../crud/create_user.php" method="POST">
				<p class="loginForm_text">Введите логин и пароль пользователя</p>
				<p>ИМЯ</p>
				<input class="loginForm_inp" name="name" type="text">
				<p>ФАМИЛИЯ</p>
				<input class="loginForm_inp" name="surname" type="text">
				<p>ЛОГИН</p>
				<input class="loginForm_inp" name="login" type="text">
				<p>ПАРОЛЬ</p>
				<input class="loginForm_inp" name="password" type="password">
				<p>ПОДТВЕРДИТЕ ПАРОЛЬ</p>
				<input class="loginForm_inp" name="password_confirm" type="password">
				<p>РОДНОЙ ЯЗЫК</p>
				<select name="lang" class="signup_select_language">
					<option value=""></option>
					<option value="en">English</option>
					<option value="ru">Русский</option>
					<option value="ua">Українська</option>
					<option value="it">Italiano</option>
				</select><br>
				<button class="button loginForm_btn mt20" type="submit">Зарегистрироваться</button>
				<p class="signup_link">
					У Вас уже есть аккаунт? — <a href="../index.php">авторизируйтесь</a>!
				</p>
			</form>
			<?php
			if (!empty($_SESSION['message']))
			{
				echo '<p class="msg">' .$_SESSION['message']. '</p>';
				unset($_SESSION['message']);
			}
			?>
		</div>
	</div>
</body>
</html>