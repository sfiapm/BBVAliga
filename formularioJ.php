<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DEL JUGADOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <!-- Código en PHP -->
<?php
// crear conexión con Oracle
$conexion = oci_connect("system", "123456789", "localhost/xe"); 

if (!$conexion) {    
    $m = oci_error();    
    echo $m['message'], "\n";    
    exit; 
} else {    
    echo ""; 
} 
?>
<form method="POST" action="conexionJugador.php"  >
                <h4>FORMULARIO JUGADOR</h4>
    <div class = "input-group">

    <div class = "input-container">
    <input type="text" name="ID_JUGADOR" placeholder = "ID JUGADOR">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="Nombre" placeholder = "Nombre">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="A_Paterno" placeholder = "Apellido Paterno">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="A_Materno" placeholder = "Apellido Materno">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="Edad" placeholder = "Edad">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="Posicion" placeholder = "Posicion">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="Apodo" placeholder = "Apodo">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="LugarNacimiento" placeholder = "Lugar de Nacimiento">
        <i class = "fa-solid fa-map" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="No_Camisa" placeholder = "Numero de Camisa">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="PrecioMercado_Euros" placeholder = "Precio en el Mercado Euros">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="ID_DT" placeholder = "ID DIRECTOR TECNICO">
        <i class = "fa-solid fa-user" ></i>
    </div>
    <div class = "input-container">
        <input type="text" name="ID_EQUIPO" placeholder = "ID EQUIPO">
        <i class = "fa-solid fa-user" ></i>
    </div>

    <input class="botons" type="submit" name = "RegistrarJUGADOR" value="Registrar JUGADOR">
    <br><br>
    <input class="botons" type="submit" name = "ActualizarJUGADOR" value="Actualizar JUGADOR">
    <br><br>
    <input class="botons" type="submit" name ="EliminarJUGADOR" value="Eliminar JUGADOR">
    
    </div>
    </form>

</body>
</html>