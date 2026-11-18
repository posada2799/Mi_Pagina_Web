<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras - More Fashions</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    .carrito-main { max-width: 1100px; margin: 40px auto; padding: 0 20px; min-height: 60vh; }
    .carrito-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 30px; margin-top: 30px; }
    @media (max-width: 768px) { .carrito-grid { grid-template-columns: 1fr; } }
    .tabla-carrito { width: 100%; border-collapse: collapse; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
    .tabla-carrito th { background-color: #1a1a1a; color: #fff; padding: 15px; text-align: left; font-weight: 500; }
    .tabla-carrito td { padding: 15px; border-bottom: 1px solid #eee; vertical-align: middle; }
    .info-item { display: flex; align-items: center; gap: 15px; }
    .info-item span { font-weight: 600; color: #333; }
    .controles-cantidad { display: flex; align-items: center; gap: 10px; }
    .btn-cant { background: #f0f0f0; border: none; width: 28px; height: 28px; border-radius: 50%; cursor: pointer; font-weight: bold; transition: background 0.2s; }
    .btn-cant:hover { background: #e0e0e0; }
    .btn-eliminar { background: none; border: none; color: #e74c3c; cursor: pointer; font-size: 1.1rem; transition: transform 0.2s; }
    .btn-eliminar:hover { transform: scale(1.2); }
    .resumen-compra { background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: fit-content; }
    .resumen-compra h3 { border-bottom: 2px solid #f4f4f4; padding-bottom: 15px; margin-bottom: 20px; color: #1a1a1a; }
    .fila-resumen { display: flex; justify-content: space-between; margin-bottom: 15px; color: #555; }
    .fila-resumen.total { font-size: 1.2rem; font-weight: 700; color: #1a1a1a; border-top: 2px solid #f4f4f4; padding-top: 15px; margin-top: 15px; }
    .btn-finalizar { width: 100%; background: #e91e63; color: white; border: none; padding: 14px; border-radius: 8px; font-size: 1rem; font-weight: 600; cursor: pointer; margin-top: 20px; transition: background 0.3s; }
    .btn-finalizar:hover { background: #c2185b; }
    .btn-vaciar { width: 100%; background: transparent; color: #777; border: 1px solid #ccc; padding: 10px; border-radius: 8px; font-size: 0.9rem; cursor: pointer; margin-top: 10px; transition: all 0.3s; }
    .btn-vaciar:hover { background: #f5f5f5; color: #333; }
    .carrito-vacio { text-align: center; padding: 50px 20px; background: #fff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
    .carrito-vacio p { font-size: 1.2rem; color: #666; margin-bottom: 20px; }
    .btn-volver { display: inline-block; background: #1a1a1a; color: #fff; padding: 12px 25px; border-radius: 8px; text-decoration: none; transition: background 0.3s; }
    .btn-volver:hover { background: #333; }
  </style>
</head>
<body>

<header class="navbar">
    <div class="logo">
      <div class="logo-circle">MF</div>
      <h1>More Fashions</h1>
    </div>
    
    <nav class="navbar-menu">
      <div class="menu-izquierda">
        <a href="index.php">Inicio</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="#">Ofertas</a>
      </div>
      
      <div class="menu-derecha">
        <?php if (isset($_SESSION['usuario'])): ?>
            <span style="color: #fff; font-weight: bold;">Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
            <a href="logout.php" class="btn-cerrar">Cerrar Sesión</a>
        <?php else: ?>
            <a href="login.php">Iniciar Sesión</a>
        <?php endif; ?>
        <a href="carrito.php">Carrito</a>
      </div>
    </nav>
  </header>

  <main class="carrito-main">
    <h2 class="titulo-seccion">Tu Carrito de Compras</h2>
    <div id="contenedor-carrito"></div>
  </main>

  <footer class="footer-principal">
    <div class="footer-container">
      <div class="footer-col marca-col">
        <div class="logo-footer">
          <div class="logo-circle">MF</div>
          <h2>More Fashions</h2>
        </div>
        <p>Celebramos tu estilo único. Creamos prendas para mujeres auténticas, seguras y llenas de actitud.</p>
      </div>
      <div class="footer-col">
        <h3>¿Tienes preguntas?</h3>
        <p>Estamos para ti de Lunes a Viernes 8am a 6pm y Sábados de 8am a 12pm.</p>
        <p class="telefono"><strong>WhatsApp / Tel:</strong> (313) 255 3477</p>
      </div>
      <div class="footer-col">
        <h3>Empresa</h3>
        <ul>
          <li><a href="#">Tiendas</a></li>
          <li><a href="#">Trabaja con Nosotros</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Soporte</h3>
        <ul>
          <li><a href="#">Cambios y garantías</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026, More Fashions — Todos los derechos reservados.</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const contenedor = document.getElementById('contenedor-carrito');

      function renderizarCarrito() {
        const carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        if (carrito.length === 0) {
          contenedor.innerHTML = `
            <div class="carrito-vacio">
              <p>Tu carrito actualmente está vacío.</p>
              <a href="catalogo.php" class="btn-volver">Explorar Catálogo</a>
            </div>
          `;
          return;
        }

        let total = 0;
        let filasHTML = '';

        carrito.forEach((item, index) => {
          const subtotal = item.precio * item.cantidad;
          total += subtotal;

          filasHTML += `
            <tr>
              <td>
                <div class="info-item">
                  <span>${item.nombre}</span>
                </div>
              </td>
              <td>$${item.precio.toLocaleString('es-CO')} COP</td>
              <td>
                <div class="controles-cantidad">
                  <button class="btn-cant" onclick="cambiarCantidad(${index}, -1)">-</button>
                  <span>${item.cantidad}</span>
                  <button class="btn-cant" onclick="cambiarCantidad(${index}, 1)">+</button>
                </div>
              </td>
              <td>$${subtotal.toLocaleString('es-CO')} COP</td>
              <td>
                <button class="btn-eliminar" onclick="eliminarProducto(${index})" title="Eliminar producto">✕</button>
              </td>
            </tr>
          `;
        });

        contenedor.innerHTML = `
          <div class="carrito-grid">
            <div class="tabla-contenedor">
              <table class="tabla-carrito">
                <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  ${filasHTML}
                </tbody>
              </table>
            </div>

            <div class="resumen-compra">
              <h3>Resumen de Pedido</h3>
              <div class="fila-resumen">
                <span>Subtotal</span>
                <span>$${total.toLocaleString('es-CO')} COP</span>
              </div>
              <div class="fila-resumen">
                <span>Envío</span>
                <span>Calculado al pagar</span>
              </div>
              <div class="fila-resumen total">
                <span>Total</span>
                <span>$${total.toLocaleString('es-CO')} COP</span>
              </div>
              <button class="btn-finalizar" onclick="procesarPago()">Proceder al Pago</button>
              <button class="btn-vaciar" onclick="vaciarCarrito()">Vaciar Carrito</button>
            </div>
          </div>
        `;
      }

      window.cambiarCantidad = (index, cambio) => {
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito[index].cantidad += cambio;

        if (carrito[index].cantidad <= 0) {
          carrito.splice(index, 1);
        }

        localStorage.setItem('carrito', JSON.stringify(carrito));
        renderizarCarrito();
      };

      window.eliminarProducto = (index) => {
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito.splice(index, 1);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        renderizarCarrito();
      };

      window.vaciarCarrito = () => {
        if (confirm('¿Estás seguro de que deseas vaciar el carrito?')) {
          localStorage.removeItem('carrito');
          renderizarCarrito();
        }
      };

      window.procesarPago = () => {
        const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        if (carrito.length === 0) {
          alert('Tu carrito está vacío.');
          return;
        }

        const direccion = prompt('Ingresa tu dirección de envío en Bogotá:');
        if (!direccion) return;

        fetch('guardar_pedido.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ carrito: carrito, direccion: direccion })
        })
        .then(response => response.json())
        .then(data => {
          alert(data.mensaje);
          
          // AQUÍ EVALÚA EL FETCH: Si el servidor mandó a redireccionar, nos manda al login
          if (data.redireccionar) {
            window.location.href = data.redireccionar;
            return;
          }

          if (data.exito) {
            localStorage.removeItem('carrito');
            window.location.href = 'index.php';
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Ocurrió un error al procesar el pago.');
        });
      };

      renderizarCarrito();
    });
  </script>
</body>
</html>