<?php
header('Content-Type: text/html; charset=UTF-8');
$ID_JUGADOR = $_POST['ID_JUGADOR'];
$NOMBRE = $_POST['Nombre'];
$A_PATERNO = $_POST['A_Paterno'];
$A_MATERNO = $_POST['A_Materno'];
$EDAD = $_POST['Edad'];
$POSICION = $_POST['Posicion'];
$APODO = $_POST['Apodo'];
$LUGARNACIMIENTO = $_POST['LugarNacimiento'];
$NO_CAMISA = $_POST['No_Camisa'];
$PRECIOMERCADO_EUROS = $_POST['PrecioMercado_Euros'];
$ID_DT = $_POST['ID_DT'];
$ID_EQUIPO = $_POST['ID_EQUIPO'];
$conexion = oci_connect("system", "M4r4lex89", "localhost/xe");

if (isset($_POST['RegistrarJUGADOR'])) {

if ($conexion) {

   echo "El jugador se registró con éxito.";

   oci_close($conexion);
} else {
   echo "Error de conexión a la base de datos.";
}
}

if (isset($_POST['ActualizarJUGADOR'])) {
if ($conexion) {

   echo "La actualización se realizó con éxito.";

   oci_close($conexion);
} else {
   echo "Error de conexión a la base de datos.";
}
}

if (isset($_POST['EliminarJUGADOR'])) {
if ($conexion) {

   echo "El jugador se elimino.";

   oci_close($conexion);
} else {
   echo "Error de conexión a la base de datos.";
}
}

?>
