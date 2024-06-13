<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");

/*Comprueba si hemos llegado a esta página PHP a través del formulario de modificaciones. 
En este caso comprueba la información "modifica" procedente del botón Guardae del formulario de Modificaciones
Transacción de datos utilizando el método: POST
*/
if(isset($_POST['modifica'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nombre = mysqli_real_escape_string($mysqli, $_REQUEST['nombre']);
	$lanzamiento = mysqli_real_escape_string($mysqli, $_POST['lanzamiento']);
	$plataforma = mysqli_real_escape_string($mysqli, $_POST['plataforma']);
	$ventas = mysqli_real_escape_string($mysqli, $_POST['ventas']);
	$desarrollador = mysqli_real_escape_string($mysqli, $_POST['desarrollador']);

	if(empty($nombre) || empty($lanzamiento) || empty($plataforma) || empty($ventas) || empty($desarrollador))
	{
		if(empty($nombre)) {
			echo "<div>Campo nombre vacío.</div>";
		}

		if(empty($lanzamiento)) {
			echo "<div>Campo año de lanzamiento vacío</div>";
		}

		if(empty($plataforma)) {
			echo "<div>Campo plataforma vacio.</div>";
		}

		if(empty($ventas)) {
			echo "<div>Campo ventas vacio..</div>";
		}

		if(empty($desarrollador)) {
			echo "<div>Campo desarrollador vacio.</div>";
		}
	} //fin si
	else 
	{
//Prepara una sentencia SQL para su ejecución. En este caso una modificación de un registro de la BD.				
		$stmt = mysqli_prepare($mysqli, "UPDATE juegos SET nombre=?,lanzamiento=?,plataforma=?,ventas=?,desarrollador=? WHERE id=?");
/*Enlaza variables como parámetros a una setencia preparada. 
i: La variable correspondiente tiene tipo entero
d: La variable correspondiente tiene tipo doble
s:	La variable correspondiente tiene tipo cadena
*/				
		mysqli_stmt_bind_param($stmt, "sssssi", $nombre, $lanzamiento, $plataforma, $ventas, $desarrollador, $id);
//Ejecuta una consulta preparada			
		mysqli_stmt_execute($stmt);
//Libera la memoria donde se almacenó el resultado
		mysqli_stmt_free_result($stmt);
//Cierra la sentencia preparada		
		mysqli_stmt_close($stmt);

		header("Location: index.php");
	}// fin sino
}//fin si
?>


<?php
/*Obtiene el id del dato a modificar a partir de la URL. Transacción de datos utilizando el método: GET*/
$id = $_GET['id'];

$id = mysqli_real_escape_string($mysqli, $id);


//Prepara una sentencia SQL para su ejecución. En este caso selecciona el registro a modificar y lo muestra en el formulario.				
$stmt = mysqli_prepare($mysqli, "SELECT nombre, lanzamiento, plataforma, ventas, desarrollador FROM juegos WHERE id=?");
//Enlaza variables como parámetros a una setencia preparada. 
mysqli_stmt_bind_param($stmt, "i", $id);
//Ejecuta una consulta preparada
mysqli_stmt_execute($stmt);
//Enlaza variables a una setencia preparada para el almacenamiento del resultado
mysqli_stmt_bind_result($stmt, $nombre, $lanzamiento, $plataforma, $ventas, $desarrollador);
//Obtiene el resultado de una sentencia SQL preparada en las variables enlazadas
mysqli_stmt_fetch($stmt);
//Libera la memoria donde se almacenó el resultado		
mysqli_stmt_free_result($stmt);
//Cierra la sentencia preparada
mysqli_stmt_close($stmt);
//Cierra la conexión de base de datos previamente abierta
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Modificación juego</title>
<!--	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
-->
</head>

<body>
<!--	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
-->
<div>
	<header>
		<h1>Panel de Control</h1>
	</header>
	
	<main>				
	<ul>
		<li><a href="index.php" >Inicio</a></li>
		<li><a href="add.html" >Nuevo</a></li>
	</ul>
	<h2>Modificación juego</h2>
<!--Formulario de edición. 
Al hacer click en el botón Guardar, llama a esta misma página: edit.php-->
	<form action="edit.php" method="post">
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" required>
		</div>

		<div>
			<label for="surname">Lanzamiento</label>
			<input type="text" name="lanzamiento" id="lanzamiento" value="<?php echo $lanzamiento;?>" required>
		</div>

		<div>
			<label for="age">Plataforma</label>
			<input type="text" name="plataforma" id="plataforma" value="<?php echo $plataforma;?>" required>
		</div>
		
		<div>
			<label for="age">Ventas</label>
			<input type="text" name="ventas" id="ventas" value="<?php echo $ventas;?>" required>
		</div>

		<div>
			<label for="age">Desarrollador</label>
			<input type="text" name="desarrollador" id="desarrollador" value="<?php echo $desarrollador;?>" required>
		</div>

		<div >
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="submit" name="modifica" value="Guardar">
			<!--<input type="button" value="Cancelar" onclick="location.href='index.php'">-->
		</div>
	</form>

	</main>	
	<footer>
	<!--Created by the IES Miguel Herrero team &copy; 2024-->
  	</footer>
</div>
</body>
</html>
