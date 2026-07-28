<?php
// 1. Iniciar sesión obligatoriamente arriba de todo
session_start();

// 2. Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "1234", "more_fashions");

// Verificar si la conexión falló
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// 3. Evaluar qué formulario envió la información
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // A) OPCIÓN REGISTRO
    if (isset($_POST['accion']) && $_POST['accion'] === 'registro') {
        
        $nombre   = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $correo   = $_POST['Correo'];
        $telefono = $_POST['Telefono'];
        $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
        $fecha    = $_POST['Fecha'];

        $sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono, contrasena, fecha_nacimiento) 
                VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$password', '$fecha')";

        if (mysqli_query($conexion, $sql)) {
            echo "<script>alert('¡Registro guardado con éxito!'); window.location.href='login.html';</script>";
        } else {
            echo "Error al registrar: " . mysqli_error($conexion);
        }
    }

    // B) OPCIÓN LOGIN
    if (isset($_POST['accion']) && $_POST['accion'] === 'login') {
        
        $correo   = $_POST['Correo'];
        $password = $_POST['Password'];

        $sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) === 1) {
            $usuario = mysqli_fetch_assoc($resultado);

            // Verificar la contraseña
            if (password_verify($password, $usuario['contrasena'])) {
                $_SESSION['usuario_id']     = $usuario['id'];
                $_SESSION['usuario_nombre'] = $usuario['nombre'];

                // Redirigir al inicio/catálogo
                header("Location: index.html");
                exit();
            } else {
                echo "<script>alert('Contraseña incorrecta'); window.location.href='login.html';</script>";
            }
        } else {
            echo "<script>alert('El correo no está registrado'); window.location.href='login.html';</script>";
        }
    }
}

// 4. Cerrar conexión al final
mysqli_close($conexion);
?>