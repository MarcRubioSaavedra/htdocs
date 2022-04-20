<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Profe">
	<link rel="stylesheet" href="style.css">
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
		<form method="post" action="save.php">
			<div class="center">
				<label for="name">Name:</label>
				<input type="text" name="name" placeholder="Your name.." class="input_text" value="<?php echo $name; ?>">
			</div>
			<div class="center">
				<label for="email">Email:</label>
				<input type="text" name="email" placeholder="Your email.." class="input_text" value="<?php echo $email; ?>">
			</div>
			<div class="center">
				<label for="password">Password:</label>
				<input type="password" name="password" placeholder="Your password.." class="input_text" value="<?php echo $password; ?>">
			</div>
			<div class="center">
				<label for="gender">Gender</label>
				<select id="gender" name="gender" required>
					<option value="man">Hombre</option>
					<option value="women">Mujer</option>
					<option value="undefined">Indefinido</option>
					<option value="" selected disabled></option>
				</select>
			</div>
			<br />
			<div style="border: 3px solid red" ; class="center">
				<h3>¿Que lenguaje te gusto mas?</h3><br />
				<input style="float:left" type="radio" name="program" value="css">
				<label for="program"> CSS</label>
				<input style="float:left" type="radio" name="program" value="php">
				<label for="program"> PHP</label>
				<input style="float:left" type="radio" name="program" value="html">
				<label for="program"> HTML</label>
				<input style="float:left" type="radio" name="program" value="js">
				<label for="program"> JS</label>
			</div>
			<br />
			<div style="border: 3px solid red" ; class="center">
				<h3>Terminos y condiciones</h3>
				<input id="terms" style="float:left" type="checkbox" name="terms" value="1" <?php if ($terms == 1) {
																								echo 'checked';
																							} ?>>
				<label for="vehicle1" checked> Terminos</label><br>
				<input id="cond" style="float:left" type="checkbox" name="cond" value="1" <?php if ($cond == 1) {
																								echo 'checked';
																							} ?>>
				<label for="vehicle2" cheked> Condiciones</label><br>
			</div>
			<br />
			<div style="border: 3px solid red" ; class="center" ;>
				<h3>Date:</h3>
				<label for="date"></label>
				<input type="date" name="date" min="2022-01-01" max="2022-12-31">
			</div>
			<br />
			<div class="center">
				<input type="submit" value="send">
				<input type="reset" value="Reset">
			</div>
		</form>
	</div>
</body>

</html>