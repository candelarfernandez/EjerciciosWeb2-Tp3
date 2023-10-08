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
      if(isset($_POST["aceptar"]) && $_FILES["imagen"]["error"] == 0) {
        $nombreImagen = $_POST['nombreImagen'];
        $imagen = $_FILES['imagen'];
    
        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
        if($check !== false) {
            $direccion = 'imagenes/';
        
            $nombreArchivo = basename($imagen["name"]);
            
            $rutaImagen = $direccion . $nombreArchivo;
            
            if (move_uploaded_file($imagen["tmp_name"], $rutaImagen)) {
                echo '<a href="imagen.php?imagen=' . urlencode($nombreImagen) . '">' . $nombreImagen . '</a>';
            } else {
                echo "Error al mover la imagen al directorio.";
            }
        } else {
            echo "El archivo no es una imagen válido.";
        }
        
    }
        ?>
            
        </div>
        <form action="ejercicio10.php" method="POST" enctype=multipart/form-data>
        <div class="cont">
        <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen">
            <br>
        </div>
        <div class="cont">
        <label for="nombreImagen">Nombre de la imagen:</label>
            <input type="text" name="nombreImagen" id="nombreImagen">
            <br>

        </div>
        <div class="cont">
        <input type="submit" value="aceptar" name="aceptar" id="aceptar">

        </div>
            
        </form>
     
       
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