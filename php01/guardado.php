<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Page Title</title>
    <meta name="author" content="Marc Rubio" />
    <meta name="description" content="IFCD0110" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <?php
    $numero = $_GET['numero'];
    $edad = $_GET['edad'];

    if ($_SERVER["REQUEST_METHOD"] == "GET") { {
            if ($numero > $edad) {
                echo "es mayor" . $numero;
            } else if ($numero < $edad) {
                echo "es mayor" . $edad;
            } else if ($numero == $edad) {
                echo "son iguales";
            }
        }
    }
    ?>
    <div>
        <p><?php echo $numero . "/" . $edad . "=" . $numero / $edad ?></p>
    </div>
</body>