<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Joaquin Juegos</title>
    
</head>

<body style=" background-image: url('bg.png'); background-size:100%;">
<br>
<script src="js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <form method="post" action="guardar.php" class="form-control" width="600px" enctype="multipart/form-data">
        <p>Nombre: <input type="text" name="nombre" class="form-control" required></input></p><br> <br>
        <p>Genero: <select name="Genero" id="gene" class="form-control" multiple> 
            <option value="disparos">Disparos</option>
            <option value="plataformas">Plataformas</option>
            <option value="RPG">RPG</option>
            <option value="Deportes">Deportes</option>
            <option value="Accion">Accion</option>
            <option value="Puzzle">Puzzle</option>
        </select> <br></p>
        <p>Precio: <input type="number" name="precio" step="0.01" class="form-control" required></input></p><br> 
        <p>Plataforma: <select name="plataforma" id="plataform" class="form-control"> 
            <option value="PC">PC</option>
            <option value="Play 4">Playstation 4</option>
            <option value="Play 5">Playstation 5</option>
            <option value="Xbox series">Xbox Series</option>
            <option value="Xbox one">Xbox One</option>
            <option value="Switch">Nintendo Switch</option>
            <option value="Familly">Familly</option>
        </select> <br></p><br> <br>
        <p>Caratula: <input type="file" name="caratula" class="form-control" accept="image/*"></input></p><br> <br>
        <div style="padding-left: 50%"><input  type="submit" id="traspasa" class="btn"></input></div>
    </form>
    <a href="index.html" id="traspasa" class="btn"><h1>VOLVER</h1>
</body>

</html>