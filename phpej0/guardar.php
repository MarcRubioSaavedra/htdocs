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

  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET['numero'])) {
      cosa($_GET['numero']);
    } else {
      echo "<h1>No Puedes dejarlo vacio</h1>";
    }
  }
  function cosa($numero)
  {
    if ($numero >= 0 && $numero < 300) {
      if ($numero < 16) {
        echo "<h1> es menor de edad </h1>";
      } else if ($numero >= 16 && $numero < 18) {
        echo "<h1> $numero es menor pero tiene derechos </h1>";
      } else {
        echo "<h1> $numero Es mayor de edad </h1>";
      }
    } else {
      echo "no puede ser";
    }
  }
  ?>
</body>