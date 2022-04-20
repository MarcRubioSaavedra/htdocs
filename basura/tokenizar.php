<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Profe">
		<title></title>
        <style>
        </style>
	</head>
    <body>
		<div>
			<?php
				$token='0123';
				$date='22.03.28';

				function encrypt($txt,$token,$t){
					$t= 
					$tokenizer=$token.$txt.$t;
					$hash= hash('gost', $tokenizer, false);
					return $hash;
				}

				echo encrypt('marcpoblenou@gmail.com',$token,date('y.m.d')).' marcpoblenou@gmail.com';
				echo '<br />';
				echo encrypt('marcpoblenou@gmail.com',$token,$date).' marcpoblenou@gmail.com';
				echo '<br />';
				echo encrypt('hola',$token,date('y.m.d')).' hola';
			?>
		</div>
    </body>
</html>