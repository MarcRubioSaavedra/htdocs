<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="Profe" />
        <title></title>
        <style></style>
    </head>
    <body>
    <?php
		print_r($_GET);
		$nameuser='';
		$mail='';
		$password='';
		$save1=false;
		$save2=false;
		$save3=false;
			if ($_SERVER["REQUEST_METHOD"] == "GET") {
				echo "AAAA";
				if(! empty($_GET['nameuser'])){
					echo "BBBB";
					$nameuser = $_GET['nameuser'];
					$save1=true;
					//echo $name.'<br />';
				}
				if(! empty($_GET['mail'])){
					echo "CCC";
					$mail = $_GET['mail'];
					$save2=true;
					//echo $name.'<br />';
				}
				if(! empty($__GET['password'])){
					echo "DDDD";
					$password = $_GET['password'];
					$save3=true;
					//echo $name.'<br />';
				}
			}
			$save=false;
                if($save1&$save2&$save3){
					echo "EEEEE";
                    $save=true;
                }
		?>
		<div>
            <?php 
                if ($save){
                    $usuarios = new SimpleXMLElement('token.xml', 0, true);
                    $nuevoUsuario = $usuarios->addChild('user');
                	$nuevoUsuario->addChild('nameuser',$nameuser );
                	$nuevoUsuario->addChild('mail',$mail );
                	$nuevoUsuario->addChild('password',$password );
                    $usuarios->saveXML('token.xml');
                    unset($_GET['nameuser']);
                    unset($_GET['mail']);
                    unset($_GET['password']);
					echo 'Guardado.'; '<input type="summit">';
                    echo '<form method="GET" action="token.xml"><br />
                    <input type="submit" value="Enviar" class="green">
                    </form>';
                    }else{  
                        echo 'Error, vuelve al inicio.'; '<input type="summit">';
                        echo '<form method="get" action=".\token.html"><br />
                        <input type="submit" value="Inicio" class="red">
						<input type="hidden" name="nameuser" value="'.$nameuser.'">
						<input type="hidden" name="mail" value="'.$mail.'">
						<input type="hidden" name="password" value="'.$password.'">
                        </form>';
					}
				?>
		</div>
    </body>
</html>