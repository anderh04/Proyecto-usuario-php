<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, apellido, cedula, escuela, residencia, email, fecha_registro FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            display: inline-block;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Usuarios Registrados</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Escuela</th>
                    <th>Residencia</th>
                    <th>Email</th>
                    <th>Fecha de Registro</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nombre']}</td>
                    <td>{$row['apellido']}</td>
                    <td>{$row['cedula']}</td>
                    <td>{$row['escuela']}</td>
                    <td>{$row['residencia']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['fecha_registro']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No hay usuarios registrados en la base de datos.</p>";
    }

    $conn->close();
    ?>

    <br>

    <a href="index.php">Registrar un nuevo usuario</a>
</body>

</html>