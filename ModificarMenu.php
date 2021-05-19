<?php
//Parámetros de conexión con la base de datos
$servername = "fdb27.runhosting.com";
$basededatos = "3802606_wpressa36b517a";
$username = "3802606_wpressa36b517a";
$password = "Qwertyui1";

// Crear conexion con la base de datos
$conexion = new mysqli($servername, $username, $password, $basededatos);

//Si no se puede conectar mensaje de error y salir
if ($conexion->connect_error) {
  die("ERROR: no se pudo conectar con la base de datos " . $conn->connect_error);
}

//Esto es para que utilice los caracteres con tildes
$conexion->set_charset("utf8");

//Se selecciona la fila cuyo nombre coincide con el parámetro pasado por GET
$resultado = $conexion -> query ("SELECT * FROM MENU where id=".$_GET['id']);
$fila = $resultado->fetch_array();

?>

<html>
<head>
</head>
<body>

<h5>MODIFICAR MENU</h5>
<form action="updateMenu.php"  method="get">  
  <p>Plato: <input type="text" name="plato" readonly="readonly" value=<?php echo "'".$fila[0]."'"?> ></p>
  <p>ID: <input type="text" name="id" value='<?php echo $fila[1]?>' ></p>
  <p>Precio: <input type="text" name="precio" value='<?php echo $fila[2]?>' ></p>
  <p><input type="submit" value="Modificar"></p>
</form>


</body>
</html>

<?php
// Liberar resultados
mysqli_free_result($resultado);

// Cerrar la conexión
mysqli_close($conexion);
?>
