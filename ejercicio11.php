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
       <form action="dados.php" method="POST">
        <div class="contenedor">
        <label for="dados">Elige un dado: </label> 
       <select id="dados" name="dados"> 
         <option value="1">Dado 1</option>
         <option value="2">Dado 2</option>
         <option value="3">Dado 3</option>
         <option value="4">Dado 4</option>
         </select>
        </div>
        <div class="contenedor">
        <input type="submit" name="lanzarDados" id="lanzarDados" value="Lanzar Dados">
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