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
    <div class="container">
        <?php

if (isset($_POST["dados"])) {
    $dados = (int)$_POST["dados"];
}
    $resultados = [];

    for ($i = 0; $i < $dados; $i++) {
        $valorDado = rand(1, 6);
        $resultados[] = $valorDado;
    }

    echo "<h2> El resultado final es: </h2>";
    echo "<div id='dadosResultado'>";
    foreach ($resultados as $valorDado) {
        echo "<img width=300px height=300px src='imagenes/dado$valorDado' alt='Dado $valorDado'>";
    }
    echo "</div>";
    echo "<p>Resultado total: " . array_sum($resultados) . "</p>";

?>
</div>

      
        
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