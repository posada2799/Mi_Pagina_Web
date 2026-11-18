<?php
session_start();

// Conexión a la base de datos (con puerto 3307 como lo tienes configurado)
$conexion = mysqli_connect("localhost", "root", "", "more_fashions", 3307);

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = mysqli_real_escape_string($conexion, $_POST['Correo']);
    $password_ingresado = $_POST['Password'];

    // Buscamos al usuario únicamente por su correo
    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' LIMIT 1";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        
        // Verificamos si la contraseña coincide con el hash guardado en la base de datos
        if (password_verify($password_ingresado, $usuario['contrasena'])) {
            // Guardamos el nombre en la sesión
            $_SESSION['usuario'] = $usuario['nombre'];

            // Redirigimos al inicio con la sesión lista
            header("Location: index.php");
            exit();
        } else {
            echo "<script>
                alert('Contraseña incorrecta.');
                window.location.href = 'login.php';
            </script>";
            exit();
        }
    } else {
        echo "<script>
            alert('El correo no está registrado.');
            window.location.href = 'login.php';
        </script>";
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>