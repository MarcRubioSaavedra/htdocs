<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Profe">
	<link rel="stylesheet" href="./style.css">
	<title></title>
</head>

<body>
	<?php
	$name = '';
	$email = '';
	$password = '';
	$gender = '';
	$program = '';
	$terms = 0;
	$cond = 0;
	$date = '';
	$save1 = false;
	$save2 = false;
	$save3 = false;
	$save4 = false;
	$save5 = false;
	$save6 = false;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!empty($_POST['name'])) {
			$name = $_POST['name'];
			$save1 = true;
			//echo $name.'<br />';
		}
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			$save2 = true;
			//echo $name.'<br />';
		}
		if (!empty($_POST['password'])) {
			$password = $_POST['password'];
			$save3 = true;
			//echo $name.'<br />';
		}
		if (!empty($_POST['gender'])) {
			$gender = $_POST['gender'];
			$save4 = true;
			//echo $name.'<br />';
		}
		if (!empty($_POST['program'])) {
			$program = $_POST['program'];
			$save5 = true;
			//echo $name.'<br />';
		}
		if (!empty($_POST['terms'])) {
			$terms = 1;

			//echo $name.'<br />';
		}
		if (!empty($_POST['cond'])) {
			$cond = 1;

			//echo $name.'<br />';
		}
		if (!empty($_POST['date'])) {
			$date = $_POST['date'];
			$save6 = true;
			//echo $name.'<br />';
		}
	}
	?>
	<div class="main">
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Password</th>
					<th>Gender</th>
					<th>Program</th>
					<th>Terms of condition</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (!$xml = simplexml_load_file('db.xml')) {
					echo "No se ha podido cargar el archivo";
				} else {
					foreach ($xml as $user) {
						echo '<tr>';
						echo '<td>' . $user->name . '</td>';
						echo '<td>' . $user->email . '</td>';
						echo '<td>' . $user->password . '</td>';
						echo '<td>' . $user->gender . '</td>';
						echo '<td>' . $user->program . '</td>';
						echo '<td>' . $user->terms . '</td>';
						echo '<td>' . gmdate('Y-m-d', intval($user->time)) . '</td>';
						echo '</tr>';
					}
				}
				?>
			</tbody>
		</table>
</body>

</html>