<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <meta name="author" content="Marc Rubio">
    <meta name="description" content="IFCD0110">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        td {
            background-color: red;
            height: 20px;
            width: 20px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mie</th>
                <th>Jue</th>
                <th>Vie</th>
                <th>Sab</th>
                <th>Dom</th>
            </tr>
            <?php
            function semana($relleno, $dias)
            {
                echo '<tr>';
                for ($i = 0; $i < $relleno; $i++) {
                    echo '<td>' . '</td>';
                }
                echo '</tr>';
            }
            semana(3, 31);
            ?>
        </thead>
    </table>
</body>