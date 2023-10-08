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
   
<form action="ejercicio13.php" method="POST">
    <div class="contenedor">
    <label for="entrada">Entrada</label>
    <input type="checkbox" name="pasos[]" id="entrada" value="entrada">
    </div>
    <div class="contenedor">
    <label for="platoPrincipal">Plato Principal</label>
    <input type="checkbox" name="pasos[]" id="platoPrincipal" value="platoPrincipal">
    </div>
    <div class="contenedor">
    <label for="acompaniamiento">Acompañamiento</label>
    <input type="checkbox" name="pasos[]" id="acompaniamiento" value="acompaniamiento">
    </div>
    <div class="contenedor">
    <label for="postre">Postre</label>
    <input type="checkbox" name="pasos[]" id="postre" value="postre">
    </div>
    <div class="contenedor">
    <input type="submit" value="Enviar" id="enviar" name="enviar">
    </div>
</form>
<div class="menuFinal">
<?php
$menu=parse_ini_file("menu.ini",true);
$pasos=$_POST["pasos"] ?? [];

echo "<ul>";
        foreach ($pasos as $paso) {
            if (isset($menu[$paso])) {
                echo "<li>{$menu[$paso]}</li>";
            }
        }
        echo "</ul>";
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
            flex-wrap:wrap;
            justify-content:center;
            padding-top:15px;
            padding-bottom:15px;
            width:100%;
        }
        form{
            background-color:#DFDFDF;
        }
    </style>
</body>
</html>