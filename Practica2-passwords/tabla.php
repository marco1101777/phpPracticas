<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
   
<?php 
    include("PHP/connect.php") ; 
    $query = "SELECT * FROM  Usuarios " ; 
    $tabla = mysqli_query($conexion, $query ) ;  
    echo "<div class='all'><table border='1'>
    <tr>
    <td id='spa'>Id  <a href='index.html'>atras</a></td>
    <td id='spa'>Nombre</td>
    <td id='spa'>Apellido Paterno</td>
    <td id='spa'>Apellido Materno</td>
    <td id='spa'>Telefono</td>
    <td id='spa'>Correo</td>
    <td id='spa'>Contrase&ntilde;</td>

</tr>
    " ; 
    while ($row  =  mysqli_fetch_array($tabla)){
        echo " <tr>
        <td id='spa'> {$row['Id']}</td>
        <td id='spa'>{$row['Nombres']}</td>
        <td id='spa'>{$row['Apellido_paterno']}</td>
        <td id='spa'>{$row['Apellido_materno']}</td>
        <td id='spa'>{$row['Telefono']}</td>
        <td id='spa'>{$row['Correo']}</td>
        <td id='spa'>{$row['Password']}</td>
    </tr> ";

    }
    echo "</table></div>" ;  
?>

    
</body>
</html>



