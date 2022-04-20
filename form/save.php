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
		<div class="asd">
			<p style="background-color: <?php if (!$save1) {
											echo 'red';
										} else {
											echo 'green';
										} ?>">Nombre:<?php echo $name; ?></p>
		</div>
		<div class="asd">
			<p style="background-color: <?php if (!$save2) {
											echo 'red';
										} else {
											echo 'green';
										} ?>">Email:<?php echo $email; ?></p>
		</div>
		<div class="asd">
			<p style="background-color: <?php if (!$save3) {
											echo 'red';
										} else {
											echo 'green';
										} ?>">Password:<?php echo $password; ?></p>
		</div>
		<div class="asd">
			<p style="background-color: <?php if (!$save4) {
											echo 'red';
										} else {
											echo 'green';
										} ?>">Gender:<?php echo $gender; ?></p>
		</div>
		<div class="asd">
			<p style="background-color: <?php if (!$save5) {
											echo 'red';
										} else {
											echo 'green';
										} ?>">Program:<?php echo $program; ?></p>
			<p style="background-color: <?php if (!$save6) {
											echo 'red';
										} else {
											echo 'green';
										} ?>">Date:<?php echo $date; ?></p>

		</div>
		<div class="asd">
			<p>Terms of conditions: <?php echo $terms; ?></p>
			<p>Terms of conditions: <?php echo $cond; ?></p>
		</div>
	</div>
	<?php
	$save = false;
	if ($save1 & $save2 & $save3 & $save4 & $save5 & $save6) {
		$save = true;
	}
	?>
	<div class="main center">
		<?php
		if ($save) {
			$usuarios = new SimpleXMLElement('db.xml', 0, true);
			$nuevoUsuario = $usuarios->addChild('user');
			$nuevoUsuario->addChild('name', $name);
			$nuevoUsuario->addChild('email', $email);
			$nuevoUsuario->addChild('password', $password);
			$nuevoUsuario->addChild('gender', $gender);
			$nuevoUsuario->addChild('program', $program);
			$nuevoUsuario->addChild('terms', $terms);
			$nuevoUsuario->addChild('cond', $cond);
			$nuevoUsuario->addChild('time', strtotime($_POST['date']));
			$usuarios->saveXML('db.xml');
			unset($_POST['name']);
			unset($_POST['email']);
			unset($_POST['password']);
			unset($_POST['gender']);
			unset($_POST['program']);
			unset($_POST['terms']);

			echo 'Guardado.';
			'<input type="summit">';
			echo '<form method="POST" action="table.php"><br />
                        <input type="submit" value="Enviar" class="green">
                        </form>';
		} else {
			echo 'Error, vuelve al inicio.';
			'<input type="summit">';
			echo '<form method="post" action=".\index.php"><br />
                        <input type="submit" value="Inicio" class="red">
						<input type="hidden" name="name" value="' . $name . '">
						<input type="hidden" name="email" value="' . $email . '">
						<input type="hidden" name="password" value="' . $password . '">
						<input type="hidden" name="gender" value="' . $gender . '">
						<input type="hidden" name="program" value="' . $program . '">
						<input type="hidden" name="terms" value="' . $terms . '">
						<input type="hidden" name="cond" value="' . $cond . '">
                        </form>';
		}
		?>

	</div>
</body>

</html>