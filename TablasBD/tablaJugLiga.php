<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Jugadores de la Liga</h2>
<?php

// Conectar a la base de datos Oracle
$conn = oci_connect("system", "123456789", "localhost/xe");

// Ejecutar la consulta SQL
$sql = 'SELECT * FROM JugLiga';
$stmt = oci_parse($conn, $sql);
oci_execute($stmt);

// Obtener los resultados de la consulta
$rows = [];
while ($row = oci_fetch_array($stmt, OCI_ASSOC)) {
  $rows[] = $row;
}

// Cerrar la conexión a la base de datos
oci_close($conn);

?>


<table>
  <tr>
    <th>ID_Jugador</th>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Edad</th>
    <th>Posicion</th>
    <th>Apodo</th>
    <th>Lugar de Nacimiento</th>
    <th>No. de Camisa</th>
    <th>Precio de Mercado (Euros)</th>
    <th>ID del Director Técnico</th>
    <th>ID del Equipo</th>
  </tr>
  <!-- Aquí se insertarán los datos de la base de datos -->
  <tbody>
    <?php foreach ($rows as $row): ?>
      <tr>
        <td><?php echo $row['ID_JUGADOR']; ?></td>
        <td><?php echo $row['NOMBRE']; ?></td>
        <td><?php echo $row['A_PATERNO']; ?></td>
        <td><?php echo $row['A_MATERNO']; ?></td>
        <td><?php echo $row['EDAD']; ?></td>
        <td><?php echo $row['POSICION']; ?></td>
        <td><?php echo $row['APODO']; ?></td>
        <td><?php echo $row['LUGARNACIMIENTO']; ?></td>
        <td><?php echo $row['NO_CAMISA']; ?></td>
        <td><?php echo $row['PRECIOMERCADO_EUROS']; ?></td>
        <td><?php echo $row['ID_DT']; ?></td>
        <td><?php echo $row['ID_EQUIPO']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>


