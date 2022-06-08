<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Joaquin Juegos</title>
</head>
<body style="background-image: url('halo.webp'); background-size: 120%">
<nav class="navbar navbar-expand-sm navbar-light bg-primary">
           <div class="container-fluid">
               <a class="navbar-brand" href="index.php"><h1>Joaquin Juegos</h1></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                   aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarID">
                   <div class="navbar-nav">
                       <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                       
                   </div>
               </div>
           </div>
       </nav>   
<h2 bgcolor="#FFFF44">Juegos Disponivles</h2>
<?php
include"conex.php";
$sele="SELECT * FROM disponivles";
$resultado=$con->query($sele);
if (!$con){
    echo"nope";
} 
?>
<script src="js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<table class="table" border=2>
	<tr class="table-secondary">

		<td>Nombre</td>
		<td>Genero</td>
		<td>Precio</td>
		<td>Plataforma</td>
        <td>Caratula</td>
		<td>Stock</td>
		<td>Comprar</td>
	</tr>
    <?php
	      while($dato=$resultado->fetch_assoc()){
		?>
		<tr border=2 class="table-primary">
	
		<td><?php echo $dato['nombre']?></td>
		<td><?php echo $dato['genero'] ?></td>
		<td><?php echo $dato['precio'] ?></td>
		<td><?php echo $dato['plataformas'] ?></td>
		<td><?php if($dato['caratula'] != ""){  echo"<img src='$dato[caratula]'>";} ?></td>
	
		</tr>
	<?php	
		  }
		  ?>
  
</table>
<a href="index.php" id="traspasa" class="btn"><h1>VOLVER</h1>
</body>
</html>