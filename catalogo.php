<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo - More Fashions</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="logo">
      <div class="logo-circle">B</div>
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

  <!-- CONTENEDOR PRINCIPAL DEL CATÁLOGO -->
  <main class="catalogo-main">
    <h2 class="titulo-seccion">Nuestra Colección</h2>

    <!-- Filtros de Categorías -->
    <div class="filtros-categorias">
      <button class="btn-filtro activo" data-categoria="todos">Todos</button>
      <button class="btn-filtro" data-categoria="blusas">Blusas</button>
      <button class="btn-filtro" data-categoria="vestidos">Vestidos</button>
      <button class="btn-filtro" data-categoria="jeans">Jeans</button>
      <button class="btn-filtro" data-categoria="chaquetas">Chaquetas</button>
      <button class="btn-filtro" data-categoria="accesorios">Accesorios</button>
      <button class="btn-filtro" data-categoria="busos">Busos</button>
      <button class="btn-filtro" data-categoria="enterizos">Enterizos</button>
      <button class="btn-filtro" data-categoria="faldas">Faldas</button>
    </div>

    <!-- Grilla Unificada de Productos -->
    <div class="grid-productos">

      <!-- Producto 1 -->
      <div class="tarjeta-producto" data-categoria="blusas">
        <img src="img/Blusas.jpg" alt="Blusa Elegante">
        <div class="info-producto">
          <h3>Blusa Manga Larga Vinotinto</h3>
          <p class="precio">$100.000 COP</p>
          <button class="btn-comprar" data-id="1" data-nombre="Blusa Manga Larga Vinotinto" data-precio="100000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 2 -->
      <div class="tarjeta-producto" data-categoria="vestidos">
        <img src="img/Vestidos.jpg" alt="Vestido Casual">
        <div class="info-producto">
          <h3>Vestido Largo Casual en Jean</h3>
          <p class="precio">$130.000 COP</p>
          <button class="btn-comprar" data-id="2" data-nombre="Vestido Largo Casual en Jean" data-precio="130000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 3 -->
      <div class="tarjeta-producto" data-categoria="jeans">
        <img src="img/Pantalones.jpg" alt="Jean Wide Leg">
        <div class="info-producto">
          <h3>Jean Wide Leg Tiro Alto</h3>
          <p class="precio">$120.000 COP</p>
          <button class="btn-comprar" data-id="3" data-nombre="Jean Wide Leg Tiro Alto" data-precio="120000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 4 -->
      <div class="tarjeta-producto" data-categoria="chaquetas">
        <img src="img/Chaqueta.jpg" alt="Chaqueta Puffer">
        <div class="info-producto">
          <h3>Chaqueta Puff Negra</h3>
          <p class="precio">$100.000 COP</p>
          <button class="btn-comprar" data-id="4" data-nombre="Chaqueta Puff Negra" data-precio="100000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 5 -->
      <div class="tarjeta-producto" data-categoria="blusas">
        <img src="img/productos/blusa1.jpg" alt="Blusa Juvenil">
        <div class="info-producto">
          <h3>Blusa con Decoraciones de Flores</h3>
          <p class="precio">$100.000 COP</p>
          <button class="btn-comprar" data-id="5" data-nombre="Blusa con Decoraciones de Flores" data-precio="100000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 6 -->
      <div class="tarjeta-producto" data-categoria="chaquetas">
        <img src="img/productos/chaqueta1.jpg" alt="Chaqueta para Dama">
        <div class="info-producto">
          <h3>Chaqueta Besibolera</h3>
          <p class="precio">$130.000 COP</p>
          <button class="btn-comprar" data-id="6" data-nombre="Chaqueta Besibolera" data-precio="130000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 7 -->
      <div class="tarjeta-producto" data-categoria="jeans">
        <img src="img/productos/jean1.jpg" alt="Jean para Dama">
        <div class="info-producto">
          <h3>Jean Skinny</h3>
          <p class="precio">$120.000 COP</p>
          <button class="btn-comprar" data-id="7" data-nombre="Jean Skinny" data-precio="120000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 8 -->
      <div class="tarjeta-producto" data-categoria="blusas">
        <img src="img/productos/blusa2.jpg" alt="Blusa Juvenil">
        <div class="info-producto">
          <h3>Blusa Blanca</h3>
          <p class="precio">$100.000 COP</p>
          <button class="btn-comprar" data-id="8" data-nombre="Blusa Blanca" data-precio="100000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 9 -->
      <div class="tarjeta-producto" data-categoria="chaquetas">
        <img src="img/productos/chaqueta2.webp" alt="Chaqueta para Dama">
        <div class="info-producto">
          <h3>Chaqueta beisbolera Blanca</h3>
          <p class="precio">$130.000 COP</p>
          <button class="btn-comprar" data-id="9" data-nombre="Chaqueta beisbolera Blanca" data-precio="130000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 10 -->
      <div class="tarjeta-producto" data-categoria="jeans">
        <img src="img/productos/jean2.png" alt="Jean para Dama">
        <div class="info-producto">
          <h3>Jean militar Bota ancha</h3>
          <p class="precio">$165.000 COP</p>
          <button class="btn-comprar" data-id="10" data-nombre="Jean militar Bota ancha" data-precio="165000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 11 -->
      <div class="tarjeta-producto" data-categoria="vestidos">
        <img src="img/productos/vestido2.jpg" alt="Vestido Rojo">
        <div class="info-producto">
          <h3>Vestido Rojo</h3>
          <p class="precio">$120.000 COP</p>
          <button class="btn-comprar" data-id="11" data-nombre="Vestido Rojo" data-precio="120000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 12 -->
      <div class="tarjeta-producto" data-categoria="blusas">
        <img src="img/productos/blusa3.jpg" alt="Blusa para Dama">
        <div class="info-producto">
          <h3>Blusa Azul Cielo</h3>
          <p class="precio">$100.000 COP</p>
          <button class="btn-comprar" data-id="12" data-nombre="Blusa Azul Cielo" data-precio="100000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 13 -->
      <div class="tarjeta-producto" data-categoria="chaquetas">
        <img src="img/productos/chaqueta3.webp" alt="Chaqueta en cuero">
        <div class="info-producto">
          <h3>Chaqueta en Cuero</h3>
          <p class="precio">$120.000 COP</p>
          <button class="btn-comprar" data-id="13" data-nombre="Chaqueta en Cuero" data-precio="120000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 14 -->
      <div class="tarjeta-producto" data-categoria="jeans">
        <img src="img/productos/jean3.jpg" alt="Jean para Dama">
        <div class="info-producto">
          <h3>Jean bota campana</h3>
          <p class="precio">$120.000 COP</p>
          <button class="btn-comprar" data-id="14" data-nombre="Jean bota campana" data-precio="120000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 15 -->
      <div class="tarjeta-producto" data-categoria="vestidos">
        <img src="img/productos/vestido1.jpg" alt="Vestido rosa">
        <div class="info-producto">
          <h3>Vestido rosa</h3>
          <p class="precio">$120.000 COP</p>
          <button class="btn-comprar" data-id="15" data-nombre="Vestido rosa" data-precio="120000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 16 -->
      <div class="tarjeta-producto" data-categoria="vestidos">
        <img src="img/productos/vestido3.webp" alt="Vestido Blanco para Dama">
        <div class="info-producto">
          <h3>Vestido Blanco con Flores</h3>
          <p class="precio">$130.000 COP</p>
          <button class="btn-comprar" data-id="16" data-nombre="Vestido Blanco con Flores" data-precio="130000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 17 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace1.jpg" alt="Correa Blanca">
        <div class="info-producto">
          <h3>Correa Blanca</h3>
          <p class="precio">$30.000 COP</p>
          <button class="btn-comprar" data-id="17" data-nombre="Correa Blanca" data-precio="30000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 18 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace2.jpg" alt="Aretes">
        <div class="info-producto">
          <h3>Aretes con Diamantes</h3>
          <p class="precio">$50.000 COP</p>
          <button class="btn-comprar" data-id="18" data-nombre="Aretes con Diamantes" data-precio="50000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 19 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace3.jpg" alt="Bolso">
        <div class="info-producto">
          <h3>Bolso Cafe</h3>
          <p class="precio">$130.000 COP</p>
          <button class="btn-comprar" data-id="19" data-nombre="Bolso Cafe" data-precio="130000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 20 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace4.jpg" alt="Bolso">
        <div class="info-producto">
          <h3>Bolso Gris Perlado</h3>
          <p class="precio">$100.000 COP</p>
          <button class="btn-comprar" data-id="20" data-nombre="Bolso Gris Perlado" data-precio="100000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 21 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace5.webp" alt="Maleta Kangol">
        <div class="info-producto">
          <h3>Maleta Kangol Negra</h3>
          <p class="precio">$140.000 COP</p>
          <button class="btn-comprar" data-id="21" data-nombre="Maleta Kangol Negra" data-precio="140000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 22 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace6.webp" alt="Aretes">
        <div class="info-producto">
          <h3>Aretes</h3>
          <p class="precio">$25.000 COP</p>
          <button class="btn-comprar" data-id="22" data-nombre="Aretes" data-precio="25000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 23 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace7.webp" alt="Candongas">
        <div class="info-producto">
          <h3>Candogas</h3>
          <p class="precio">$20.000 COP</p>
          <button class="btn-comprar" data-id="23" data-nombre="Candogas" data-precio="20000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 24 -->
      <div class="tarjeta-producto" data-categoria="accesorios">
        <img src="img/productos/ace8.jpg" alt="Correa Negra">
        <div class="info-producto">
          <h3>Correa Negra</h3>
          <p class="precio">$30.000 COP</p>
          <button class="btn-comprar" data-id="24" data-nombre="Correa Negra" data-precio="30000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 25 -->
      <div class="tarjeta-producto" data-categoria="enterizos">
        <img src="img/productos/enterizo1.jpg" alt="Enterizo Negro">
        <div class="info-producto">
          <h3>Enterizo negro Largo</h3>
          <p class="precio">$60.000 COP</p>
          <button class="btn-comprar" data-id="25" data-nombre="Enterizo negro Largo" data-precio="60000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 26 -->
      <div class="tarjeta-producto" data-categoria="enterizos">
        <img src="img/productos/enterizo2.jpg" alt="Enterizo Bleiser">
        <div class="info-producto">
          <h3>Enterizo Bleiser</h3>
          <p class="precio">$50.000 COP</p>
          <button class="btn-comprar" data-id="26" data-nombre="Enterizo Bleiser" data-precio="50000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 27 -->
      <div class="tarjeta-producto" data-categoria="enterizos">
        <img src="img/productos/enterizo3.webp" alt="Enterizo Blanco">
        <div class="info-producto">
          <h3>Enterizo Blanco</h3>
          <p class="precio">$60.000 COP</p>
          <button class="btn-comprar" data-id="27" data-nombre="Enterizo Blanco" data-precio="60000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 28 -->
      <div class="tarjeta-producto" data-categoria="enterizos">
        <img src="img/productos/enterizo4.jpg" alt="Enterizo Rojo">
        <div class="info-producto">
          <h3>Enterizo Rojo Largo</h3>
          <p class="precio">$65.000 COP</p>
          <button class="btn-comprar" data-id="28" data-nombre="Enterizo Rojo Largo" data-precio="65000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 29 -->
      <div class="tarjeta-producto" data-categoria="busos">
        <img src="img/productos/buso1.jpg" alt="Buso Gris">
        <div class="info-producto">
          <h3>Buso Gris</h3>
          <p class="precio">$40.000 COP</p>
          <button class="btn-comprar" data-id="29" data-nombre="Buso Gris" data-precio="40000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 30 -->
      <div class="tarjeta-producto" data-categoria="busos">
        <img src="img/productos/buso2.jpg" alt="Buso Ombligero">
        <div class="info-producto">
          <h3>Buso Ombligero</h3>
          <p class="precio">$40.000 COP</p>
          <button class="btn-comprar" data-id="30" data-nombre="Buso Ombligero" data-precio="40000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 31 -->
      <div class="tarjeta-producto" data-categoria="busos">
        <img src="img/productos/buso3.webp" alt="Buso los Angeles">
        <div class="info-producto">
          <h3>Buso de los Angeles</h3>
          <p class="precio">$55.000 COP</p>
          <button class="btn-comprar" data-id="31" data-nombre="Buso de los Angeles" data-precio="55000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 32 -->
      <div class="tarjeta-producto" data-categoria="busos">
        <img src="img/productos/buso4.jpg" alt="Buso Azul oscuro">
        <div class="info-producto">
          <h3>Buso Azul oscuro</h3>
          <p class="precio">$50.000 COP</p>
          <button class="btn-comprar" data-id="32" data-nombre="Buso Azul oscuro" data-precio="50000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 33 -->
      <div class="tarjeta-producto" data-categoria="faldas">
        <img src="img/productos/falda1.webp" alt="Falda Jean Claro">
        <div class="info-producto">
          <h3>Falda Jean Claro</h3>
          <p class="precio">$30.000 COP</p>
          <button class="btn-comprar" data-id="33" data-nombre="Falda Jean Claro" data-precio="30000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 34 -->
      <div class="tarjeta-producto" data-categoria="faldas">
        <img src="img/productos/falda2.png" alt="Falda Jean Gris">
        <div class="info-producto">
          <h3>Falda Jean Gris</h3>
          <p class="precio">$30.000 COP</p>
          <button class="btn-comprar" data-id="34" data-nombre="Falda Jean Gris" data-precio="30000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 35 -->
      <div class="tarjeta-producto" data-categoria="faldas">
        <img src="img/productos/falda3.jpg" alt="Falda Azul Oscuro">
        <div class="info-producto">
          <h3>Falda Azul Oscuro</h3>
          <p class="precio">$30.000 COP</p>
          <button class="btn-comprar" data-id="35" data-nombre="Falda Azul Oscuro" data-precio="30000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 36 -->
      <div class="tarjeta-producto" data-categoria="faldas">
        <img src="img/productos/falda4.avif" alt="Falda Negra Semicuero">
        <div class="info-producto">
          <h3>Falda Negra Semicuero</h3>
          <p class="precio">$35.000 COP</p>
          <button class="btn-comprar" data-id="36" data-nombre="Falda Negra Semicuero" data-precio="35000">Añadir al Carrito</button>
        </div>
      </div>

      <!-- Producto 37 -->
      <div class="tarjeta-producto" data-categoria="faldas">
        <img src="img/productos/falda5.webp" alt="Falda Negra Larga">
        <div class="info-producto">
          <h3>Falda Negra Larga</h3>
          <p class="precio">$50.000 COP</p>
          <button class="btn-comprar" data-id="37" data-nombre="Falda Negra Larga" data-precio="50000">Añadir al Carrito</button>
        </div>
      </div>

    </div>
  </main>

  <!-- FOOTER PRINCIPAL -->
  <footer class="footer-principal">
    <div class="footer-container">
      
      <div class="footer-col marca-col">
        <div class="logo-footer">
          <div class="logo-circle">MF</div>
          <h2>More Fashions</h2>
        </div>
        <p>Celebramos tu estilo único. Creamos prendas para mujeres auténticas, seguras y llenas de actitud.</p>
        <div class="redes-sociales">
          <a href="#">F</a>
          <a href="#">I</a>
          <a href="#">T</a>
        </div>
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
          <li><a href="#">¿Quieres colaborar?</a></li>
          <li><a href="#">Tarjetas de regalo</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3>Soporte</h3>
        <ul>
          <li><a href="#">Cambios y garantías</a></li>
          <li><a href="#">Políticas de cambio</a></li>
          <li><a href="#">Políticas de garantía</a></li>
          <li><a href="#">Políticas de envío</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p>&copy; 2026, More Fashions — Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- SCRIPT DE FILTRADO Y MANEJO DE CARRITO -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const botonesFiltro = document.querySelectorAll('.btn-filtro');
      const productos = document.querySelectorAll('.tarjeta-producto');

      function aplicarFiltro(categoria) {
        botonesFiltro.forEach(btn => {
          const btnCat = btn.getAttribute('data-categoria');
          if (btnCat === categoria) {
            btn.classList.add('activo');
          } else {
            btn.classList.remove('activo');
          }
        });

        productos.forEach(producto => {
          const categoriaProducto = producto.getAttribute('data-categoria');
          if (categoriaProducto) {
            if (categoria === 'todos' || categoriaProducto.toLowerCase().trim() === categoria) {
              producto.classList.remove('oculto');
            } else {
              producto.classList.add('oculto');
            }
          }
        });
      }

      botonesFiltro.forEach(boton => {
        boton.addEventListener('click', () => {
          const cat = boton.getAttribute('data-categoria').toLowerCase().trim();
          aplicarFiltro(cat);
        });
      });

      const urlParams = new URLSearchParams(window.location.search);
      const categoriaUrl = urlParams.get('cat');

      if (categoriaUrl) {
        aplicarFiltro(categoriaUrl.toLowerCase().trim());
      }

      const botonesComprar = document.querySelectorAll('.btn-comprar');

      botonesComprar.forEach(boton => {
        boton.addEventListener('click', (e) => {
          const id = e.target.getAttribute('data-id');
          const nombre = e.target.getAttribute('data-nombre');
          const precio = parseInt(e.target.getAttribute('data-precio'));

          const nuevoProducto = {
            id: id,
            nombre: nombre,
            precio: precio,
            cantidad: 1
          };

          let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
          const existeIndex = carrito.findIndex(item => item.id === id);

          if (existeIndex !== -1) {
            carrito[existeIndex].cantidad += 1;
          } else {
            carrito.push(nuevoProducto);
          }

          localStorage.setItem('carrito', JSON.stringify(carrito));
          alert(`${nombre} añadido al carrito.`);
        });
      });
    });
  </script>
</body>
</html>