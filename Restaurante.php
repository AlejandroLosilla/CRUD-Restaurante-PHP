<?php
//Parámetros de conexión a la base de datos
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

//Esto es para que funcionen los caracteres con tildes
$conexion->set_charset("utf8");

//Se lanza el SELECT sobre la base de datos
$resultado = $conexion -> query ("SELECT * FROM MENU");
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MENU</title>
<link rel="stylesheet" type="text/css" href="estiloRestaurante.css" media="screen" />
</head>

<body>

<h5>MENU DEL RESTAURANTE</h5>

<table>
   <tr>
     <th>Plato</th>
     <th>ID</th>
     <th>Precio</th>
   </tr>
   
   <?php
   while ($fila = $resultado->fetch_array()) { 
     echo "<tr>";
       echo "<td>".$fila[0]."</td>";
       echo "<td>".$fila[1]."</td>";
       echo "<td>".$fila[2]."</td>";
       echo "<td>".$fila[3]."</td>";
       echo "<td><a href=http://1daw.onlinewebshop.net/ModificarContacto.php?nombre='".rawurlencode($fila[0])."'>Modificar</a>";
       echo "</br>";
       echo "<a href=http://1daw.onlinewebshop.net/BorrarContacto.php?nombre='".rawurlencode($fila[0])."'>Borrar</a></td>";
     echo "</tr>";
   } ?>
   
</table>

<a href=http://1daw.onlinewebshop.net/InsertarContacto.php>Insertar contacto</a>

</body>
</html>

<?php
// Liberar resultados
mysqli_free_result($resultado);

// Cerrar la conexión
mysqli_close($conexion);
?>
