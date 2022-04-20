<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Profe">
		<title></title>
		<style>
			body{
				background-color:#848484;
			}
			.main{
				background-color: orange;
				margin: 5%;
				padding:5px;
				border-radius: 5px;
			}
			.center{
				margin: auto;
				width:30%;
				padding:10px;
				text-align:center;
			}
			label{
				text-align:left;
				display:block;
			}
			.input_text{
				width:99%;
				
			}
			table {
				border-style: solid;
				border-radius: 5px;
				border-width: none;
				border-color: red;
				width: 50%;
				margin-left: 160px;
				padding: 20px 20px; 
				font-family: Lucida Console;
				font-size: 30px;
				background-color: purple;
			}
			.asd{
				margin-left:20px;
			}
			
			th {
				padding-right: 90px;
				background-color: red;
				color: white;
			}
			
		</style>
	</head>
	<body>
	<?php
		$name='';
		$email='';
		$password='';
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(! empty($_POST['fname'])){
					$name = $_POST['fname'];
					//echo $name.'<br />';
				}
				if(! empty($_POST['email'])){
					$email = $_POST['email'];
					//echo $name.'<br />';
				}
				if(! empty($_POST['password'])){
					$password = $_POST['password'];
					//echo $name.'<br />';
				}
			}
		?>
		<div class="main">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="center">
					<label for="fname">Name:</label>
					<input type="text" name="fname" placeholder="Your name.." class="input_text">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="text" name="email" class="input_text" value="<?php echo $name;?>">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" class="input_text" value="<?php echo $name;?>">
				</div>
				<div class="center">
					<input type="submit">
				</div>
			</form>
		</div>
		
		<div class="main">
			<div class="asd">
				<p>Nombre:<?php echo $name;?></p>
			</div>
			<div class="asd">	
				<p>Email:<?php echo $email;?></p>
			</div>
			<div class="asd">
				<p>Password:<?php echo $password;?></p>
			</div>
			<br />
			<?php print_r($_POST); ?>
		</div>
	<?php 
		if($save)
			echo 'OK';
			unset($_POST['fname']);
			unset($_POST['email']);
			unset($_POST['password']);
	?>
		<div class="main">
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Password</th>
					<th>Time</th>
				</tr>
			</thead>
			<tbody>
		<?php
			if(!$xml = simplexml_load_file('tabla2.xml')){
				echo "No se ha podido cargar el archivo";
			} else {
				foreach ($xml as $user){
					echo '<tr>';
					echo '<td>'.$user->name.'</td>';
					echo '<td>'.$user->email.'</td>';
					echo '<td>'.$user->password.'</td>';
					echo '<td>'.$user->time.'</td>';
					echo '</tr>';
				}
			}
		?>
			</tbody>
		</table>
	</body>
</html>