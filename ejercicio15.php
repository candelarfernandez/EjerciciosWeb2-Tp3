<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candela Fernandez</title>
</head>
<body>
    <header>
        <h1>Candela Fernandez</h1>
        <nav>
            <ul class="menu">
                <li><a href="ejercicio9.php">Ejercicio 9</a></li>
                <li><a href="ejercicio10.php">Ejercicio 10</a></li>
                <li><a href="ejercicio11.php">Ejercicio 11</a></li>
                <li><a href="ejercicio12.php">Ejercicio 12</a></li>
                <li><a href="ejercicio13.php">Ejercicio 13</a></li>
                <li><a href="ejercicio14.php">Ejercicio 14</a></li>
                <li><a href="ejercicio15.php">Ejercicio 15</a></li>
            </ul>
        </nav>
    </header>
    <main>
<?php
function buscar($clave, $texto) {
    $longitudClave = strlen($clave);
    $longitudTexto = strlen($texto);
    $contador = 0;

    for ($i = 0; $i <= $longitudTexto - $longitudClave; $i++) {
        for ($j = 0; $j < $longitudClave; $j++) {
            if (!isset($texto[$i + $j]) || $texto[$i + $j] !== $clave[$j]) {
                break;
            }else{
                $contador++;
                $i += $longitudClave - 1;   
            }
        }
        
    }

    return $contador;
}

$texto = "Faltan cinco para las cinco";
$clave = "cinco";
$resultado = buscar($clave, $texto);
echo "La palabra $clave aparece $resultado veces en el texto.";
?>
      
        
    </main>

    <style>
        h1{
            padding: 15px;
           text-align:center;
        }
        a{
            text-decoration:none;
            color:black;
        
        }
        .menu{
            display: flex;
            justify-content:space-around;
        }
    </style>
</body>
</html>