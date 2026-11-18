<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "more_fashions", 3307);

if (!$conexion) {
    echo json_encode(['exito' => false, 'mensaje' => 'Error de conexión a la base de datos.']);
    exit();
}

// AQUÍ ESTÁ EL CAMBIO DE SESIÓN: Si no ha iniciado sesión, le decimos que lo mande al login
if (!isset($_SESSION['usuario'])) {
    echo json_encode([
        'exito' => false, 
        'redireccionar' => 'login.php', 
        'mensaje' => 'Debes iniciar sesión para realizar la compra. Serás redirigido.'
    ]);
    exit();
}

$datos = json_decode(file_get_contents('php://input'), true);

if (!isset($datos['carrito']) || empty($datos['carrito'])) {
    echo json_encode(['exito' => false, 'mensaje' => 'Tu carrito está vacío.']);
    exit();
}

$carrito = $datos['carrito'];
$direccion_envio = mysqli_real_escape_string($conexion, $datos['direccion']);
$id_usuario = 1; 
$metodo_pago = "Contra entrega";

// Validar stock antes de permitir cualquier compra
foreach ($carrito as $item) {
    $id_producto = intval($item['id']);
    $cantidad_comprada = intval($item['cantidad']);

    $sql_verificar = "SELECT stock, nombre_producto FROM productos WHERE id = $id_producto";
    $resultado = mysqli_query($conexion, $sql_verificar);
    $producto = mysqli_fetch_assoc($resultado);

    if (!$producto || $producto['stock'] <= 0 || $producto['stock'] < $cantidad_comprada) {
        $nombre_prod = $producto ? $producto['nombre_producto'] : 'Desconocido';
        echo json_encode([
            'exito' => false, 
            'mensaje' => "¡Lo sentimos! La prenda '$nombre_prod' se encuentra AGOTADA o no hay suficiente stock."
        ]);
        exit();
    }
}

// Calcular total y guardar pedido
$total_general = 0;
foreach ($carrito as $item) {
    $total_general += ($item['precio'] * $item['cantidad']);
}

$sql_pedido = "INSERT INTO pedidos (id_usuario, total, direccion_envio, metodo_pago, fecha_pedido) 
               VALUES ('$id_usuario', '$total_general', '$direccion_envio', '$metodo_pago', NOW())";

if (mysqli_query($conexion, $sql_pedido)) {
    foreach ($carrito as $item) {
        $id_producto = intval($item['id']);
        $cantidad_comprada = intval($item['cantidad']);

        $sql_stock = "UPDATE productos SET stock = stock - $cantidad_comprada WHERE id = $id_producto";
        mysqli_query($conexion, $sql_stock);
    }

    echo json_encode(['exito' => true, 'mensaje' => '¡Compra procesada con éxito y stock actualizado!']);
} else {
    echo json_encode(['exito' => false, 'mensaje' => 'Error al registrar el pedido en la base de datos.']);
}
?>