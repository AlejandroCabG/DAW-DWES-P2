<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<table border>

    <?php
    for ($fila = 1; $fila <= 9; $fila++)//bucle for para hacer 9 filas
    {
        echo "<tr>";
        for ($col = 1; $col <= 9; $col++)//bucle for para hacer 9 columnas
        {
            $total = $fila + $col;//suma del total de filas y columnas
            if ($total % 2 == 0)//Compruebo el resto del total al dividirlo por 2. Si el total es un
                // número par, da un cero al dividirlo por 2. Si da un cero, entonces se hace echo de un cuadrado negro.
            {
                echo "<td height=30px width=30px bgcolor=white></td>";//cuadrados blancos
            } else {
                echo "<td height=30px width=30px bgcolor=black></td>";//cuadrados negros
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>