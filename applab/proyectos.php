<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="static/css/style.css">
</head>
<body>

	<div class="all">
		<?php
				include("php/mysqlConexion.php") ; 
				$query = "SELECT  * FROM  Proyectos"   ; 
				$GetTabla = mysqli_query($cnx , $query) ; 
				echo "<table border='1'>
						<tr>
							<td class='space'>Nombre</td>
							<td class='space'>Fecha Inicio</td>
							<td class='space'>Fecha Fin</td>
							<td class='space'>Presupuesto</td>
	
						</tr>

					" ;  

				while($row = mysqli_fetch_array($GetTabla)){
						echo "<tr>
							<td class='space'>{$row['Nombre_Proyecto']}</td>
							<td class='space'>{$row['Fecha_Inicio']}</td>
							<td class='space'>{$row['Fecha_Fin']}</td>
							<td class='space'>\${$row['Presupuesto']}</td>
	
						</tr>";

				}
				echo "</table>" ;
 		?>	

	</div>	

</body>
</html>