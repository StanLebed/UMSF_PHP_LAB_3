<?php 
require_once "../vendor/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<title>Таблица пользователей</title>-->
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<table>
		<tr>
			<rh>ID</rh>
			<rh>Login</rh>
			<rh>Name</rh>
			<rh>Surname</rh>
			<rh>Role</rh>
			<rh>Lang</rh>
		</tr>
		<?php  
		$users = mysqli_query($connect, "SELECT * FROM  'users' ");
		$users = mysqli_fetch_all($users, MYSQLI_ASSOC);
		foreach ($users as $user)
		{
			?>
			<tr>
				<td><?= user[0] ?></td>
				<td><?= user[1] ?></td>
				<td><?= user[3] ?></td>
				<td><?= user[4] ?></td>
				<td><?= user[5] ?></td>
				<td><?= user[6] ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>