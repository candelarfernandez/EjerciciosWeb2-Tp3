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
        <div class="contenedor">
        <?php
        
    if (isset($_GET['imagen'])) {
        $nombreImagen = $_GET['imagen'];
        $rutaImagen = 'imagenes/' . $nombreImagen;

            echo '<img width=600px height=600px src=" ' . $rutaImagen . '" alt="' . '">' . '<br>' . $nombreImagen;

        
    } else {
        echo 'No se proporcionó el nombre de la imagen.';
    }
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
        .contenedor{
            display:flex;
            justify-content:center;
            flex-wrap:wrap;
        }
        #nombreImagen, #imagen{
            margin: 10px;
        }
        #aceptar{
            display:flex;
            justify-content:center;
        }
        form{
            background-color:#F5EFFB;
            display:flex;
            flex-wrap:wrap;
            padding:15px;
        }
        .cont{
            width:100%;
            display:flex;
            justify-content:center;
        }
       
    </style>
</body>
</html>