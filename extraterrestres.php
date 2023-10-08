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

 <div class="registrarVisita">
    <?php
    $nombre=$_POST['nombreVisitante'];
    $planeta=$_POST['planetaVisitante'];

    //creamos el array con los datos

    $nuevaVisita = [
        "nombre" => $nombre,
        "planeta" => $planeta
    ];

    //traemos los datos del json
    $registros = file_get_contents("visitas.json");

    // decodificamos el contenido si existe
    $registrosArray = json_decode($registros, true) ?? [];

 //agregamos los nuevos datos al array existente
    $registrosArray[] = $nuevaVisita;

    //lo codificamos
    $actualizar = json_encode($registrosArray);

    // Guardar el nuevo contenido en el archivo de registro
    file_put_contents("visitas.json", $actualizar);

    $registros = file_get_contents("visitas.json");

// Decodificar el contenido JSON
$registrosArray = json_decode($registros, true) ?? [];

$contador = 0;

    echo "<h2>Lista de Visitantes</h2>";
    echo "<ul>";
    foreach ($registrosArray as $visita) {
        if($visita['nombre'] != null){
            echo "<li>{$visita['nombre']} desde {$visita['planeta']}</li>";
        if ($visita['planeta'] !== "Tierra") {
            $contador++;
        }
        }
        
    }
    echo "</ul>";
    echo "<p>Total de visitantes no pertenecientes a la Tierra: $contador</p>";

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