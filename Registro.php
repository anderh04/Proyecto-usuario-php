<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar que se haya enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $escuela = $_POST['escuela'];
    $residencia = $_POST['residencia'];
    $email = $_POST['email'];

    $sql_check = "SELECT * FROM usuarios WHERE email='$email' OR cedula='$cedula'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "<script>alert('El usuario con este email o cédula ya está registrado.'); window.location.href = 'index.php';</script>";
    } else {
        
        $sql = "INSERT INTO usuarios (nombre, apellido, cedula, escuela, residencia, email) 
                VALUES ('$nombre', '$apellido', '$cedula', '$escuela', '$residencia', '$email')";

        if ($conn->query($sql) === TRUE) {
            
            echo "<script>alert('Usuario registrado con éxito'); window.location.href = 'index.php';</script>";
        } else {
            
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
