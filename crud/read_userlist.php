<?php 
require_once "../vendor/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h2>Таблица пользователей</h2>
	<div class="userlist">
		<table>
			<tr class="userlist_title">
				<th>ID</th>
				<th>Login</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Role</th>
				<th>Language</th>
			</tr>
			<?php  
			$users = mysqli_query($connect, "SELECT * FROM `users`");

			$users = mysqli_fetch_all($users, MYSQLI_ASSOC);

			if (!mysqli_query($connect, "SELECT * FROM `users`")) 
			{
				printf("Error: %s\n", mysqli_error($connect));
			}
			foreach ($users as $user)
			{
				?>
				<tr>
					<td><?= $user['id'] ?></td>
					<td><?= $user['login'] ?></td>
					<td><?= $user['name'] ?></td>
					<td><?= $user['surname'] ?></td>
					<td><?= $user['role'] ?></td>
					<td><?= $user['language'] ?></td>
				</tr>
				<?php 
			}
			?>
		</table>
	</div>
</body>
</html>
