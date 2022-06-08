<?php
include"conex.php";
if (!!!$con){
    echo"No hay sql";
}
$nom=$_REQUEST['nombre'];
$gene=$_REQUEST['Genero'];
$pres=$_REQUEST['precio'];
$plat=$_REQUEST['plataforma'];
$ruta="img/".basename($_FILES['caratula']['name']);
move_uploaded_file($_FILES['caratula']['tmp_name'],$ruta);
//$img=$_FILES['caratula'];

 $sql="INSERT INTO disponivles VALUES(NULL,'$nom','$gene',$pres,'$plat','$ruta')";
 $con->query($sql);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <?php
      echo"Se ha añadido a <img src='$ruta'>";


      include"an.php"
     ?>
     ?>
 </body>
 </html>
