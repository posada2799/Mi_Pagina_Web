<?php
// 1. Iniciamos la sesión para poder acceder a ella
session_start();

// 2. Borramos todas las variables de sesión
session_unset();

// 3. Destruimos la sesión por completo
session_destroy();

// 4. Redirigimos al usuario de vuelta a la página principal
header("Location: index.php");
exit();
?>