<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Php.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a MySQL y Registro de Usuarios</title>
</head>

<body>
    <h1>
        <span>R</span>
        <span>e</span>
        <span>g</span>
        <span>i</span>
        <span>s</span>
        <span>t</span>
        <span>r</span>
        <span>o</span>
        <span>&nbsp;</span>
        <span>d</span>
        <span>e</span>
        <span>&nbsp;</span>
        <span>U</span>
        <span>s</span>
        <span>u</span>
        <span>a</span>
        <span>r</span>
        <span>i</span>
        <span>o</span>
        <span>s</span>
    </h1>

    <!-- Formulario para ingresar un nuevo usuario -->
    <form action="registro.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>

        <label for="cedula">Cédula:</label>
        <input type="text" name="cedula" id="cedula" required>
        <br>

        <label for="escuela">Escuela:</label>
        <input type="text" name="escuela" id="escuela" required>
        <br>

        <label for="residencia">Residencia:</label>
        <input type="text" name="residencia" id="residencia" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <input type="submit" value="Registrar Usuario">
    </form>


    <br>
    <!-- Link para ver los usuarios registrados -->
    <a href="mostrar_usuarios.php" class="btn-ver-usuarios">Ver usuarios registrados</a>
</body>

</html>