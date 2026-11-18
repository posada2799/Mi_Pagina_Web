<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>More Fashions - Inicio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <div class="logo-circle">B</div>
      <h1>More Fashions</h1>
    </div>
    
    <nav class="navbar-menu">
      <div class="menu-izquierda">
        <a href="index.php">Inicio</a>
        <a href="#">Ofertas</a>
        <a href="#">Contacto</a>
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

<section class="banner_principal">
  <h1>Encuentra tu estilo único</h1>
  <h1><strong> Nueva Colección 2026</strong></h1>
  <a href="catalogo.php" class="btn-hero">COMPRAR YA</a>
  <br>
  <br>
  <br>
  <h3>-Del 1 al 28 Agosto</h3>
</section>

  <section class="seccion-categorias">
    <br>  
    <br>
    <br>
    <br>
    <hr>
    <h2>Categorías Destacadas</h2>

    <div class="carrusel-categorias">

      <!-- Tarjeta 1 -->
      <a href="catalogo.php?cat=vestidos" class="tarjeta-categoria">
        <img src="img/Moda.jpg" alt="Todo el Catalogo">
        <h3>Todo</h3>
      </a>

      <!-- Tarjeta 2 -->
      <a href="catalogo.php?cat=vestidos" class="tarjeta-categoria">
        <img src="img/Blusas.jpg" alt="Blusas">
        <h3>Blusas</h3>
      </a>

      <!-- Tarjeta 3 -->
      <a href="catalogo.php?cat=vestidos" class="tarjeta-categoria">
        <img src="img/Vestidos.jpg" alt="Vestidos">
        <h3>Vestidos</h3>
      </a>

      <!-- Tarjeta 4 -->
      <a href="catalogo.php?cat=jeans" class="tarjeta-categoria">
        <img src="img/Pantalones.jpg" alt="Jeans">
        <h3>Jeans</h3>
      </a>

      <!-- Tarjeta 5 -->
      <a href="catalogo.php?cat=faldas" class="tarjeta-categoria">
        <img src="img/Faldas.jpg" alt="Faldas">
        <h3>Faldas</h3>
      </a>

      <!-- Tarjeta 6 -->
      <a href="catalogo.php?cat=enterizos" class="tarjeta-categoria">
        <img src="img/Enterisos.jpg" alt="Enterisos">
        <h3>Enterisos</h3>
      </a>

      <!-- Tarjeta 7 -->
      <a href="catalogo.php?cat=conjuntos" class="tarjeta-categoria">
        <img src="img/Conjuntos.jpg" alt="Conjuntos">
        <h3>Conjuntos</h3>
      </a> 
    
      <!-- Tarjeta 8 -->
      <a href="catalogo.php?cat=fbuzos" class="tarjeta-categoria">
        <img src="img/Busos.jpg" alt="Buzos">
        <h3>Buzos</h3>
      </a>   

      <!-- Tarjeta 9 -->
      <a href="catalogo.php?cat=zapatos" class="tarjeta-categoria">
        <img src="img/Zapatos.jpg" alt="Zapatos">
        <h3>Zapatos</h3>
      </a>  

      <!-- Tarjeta 10 -->
      <a href="catalogo.php?cat=chaquetas" class="tarjeta-categoria">
        <img src="img/Chaqueta.jpg" alt="Chaquetas">
        <h3>Chaquetas</h3>
      </a>  
    
      <!-- Tarjeta 11 -->
      <a href="catalogo.php?cat=accesorios" class="tarjeta-categoria">
        <img src="img/Accesorios.avif" alt="Accesorios">
        <h3>Accesorios</h3>
      </a>  
    </div>

  <div class="puntos-carrusel">
    <span class="punto activo"></span>
    <span class="punto"></span>
    <span class="punto"></span>
    <span class="punto"></span>
  </div>
</section>  

<section class="banner_medio">
  <img src="img/BANNER.jpg" alt="Confianza antes del Click">
</section>

<!-- FOOTER PRINCIPAL -->
<footer class="footer-principal">
  <div class="footer-container">
    
    <!-- Columna 1: Marca y Redes -->
    <div class="footer-col marca-col">
      <div class="logo-footer">
        <div class="logo-circle">MF</div>
        <h2>More Fashions</h2>
      </div>
      <p>Celebramos tu estilo único. Creamos prendas para mujeres auténticas, seguras y llenas de actitud.</p>
      <div class="redes-sociales">
        <a href="#"><i class="fab fa-facebook"></i> F</a>
        <a href="#"><i class="fab fa-instagram"></i> I</a>
        <a href="#"><i class="fab fa-tiktok"></i> T</a>
      </div>
    </div>

    <!-- Columna 2: Contacto -->
    <div class="footer-col">
      <h3>¿Tienes preguntas?</h3>
      <p>Estamos para ti de Lunes a Viernes 8am a 6pm y Sábados de 8am a 12pm.</p>
      <p class="telefono"><strong>WhatsApp / Tel:</strong> (313) 255 3477</p>
    </div>

    <!-- Columna 3: Empresa -->
    <div class="footer-col">
      <h3>Empresa</h3>
      <ul>
        <li><a href="#">Tiendas</a></li>
        <li><a href="#">Trabaja con Nosotros</a></li>
        <li><a href="#">¿Quieres colaborar?</a></li>
        <li><a href="#">Tarjetas de regalo</a></li>
      </ul>
    </div>

    <!-- Columna 4: Soporte -->
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

  <!-- Barra de Copyright inferior -->
  <div class="footer-bottom">
    <p>&copy; 2026, More Fashions — Todos los derechos reservados.</p>
  </div>
</footer>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const carrusel = document.querySelector('.carrusel-categorias');
    const puntos = document.querySelectorAll('.punto');

    if (carrusel && puntos.length > 0) {
      // 1. Cuando el usuario hace scroll horizontal en el carrusel
      carrusel.addEventListener('scroll', () => {
        // Calculamos en qué posición va el scroll respecto al ancho total
        const scrollLeft = carrusel.scrollLeft;
        const anchoTarjeta = carrusel.querySelector('.tarjeta-categoria').offsetWidth + 25; // Ancho + gap
        const index = Math.round(scrollLeft / anchoTarjeta);

        // Actualizamos las clases activas de los puntos
        puntos.forEach((punto, i) => {
          if (i === index) {
            punto.classList.add('activo');
          } else {
            punto.classList.remove('activo');
          }
        });
      });

      // 2. Cuando el usuario hace clic directamente en una bolita (punto)
      puntos.forEach((punto, index) => {
        punto.addEventListener('click', () => {
          const anchoTarjeta = carrusel.querySelector('.tarjeta-categoria').offsetWidth + 25;
          carrusel.scrollTo({
            left: anchoTarjeta * index,
            behavior: 'smooth' // Hace que se desplace suavemente
          });
        });
      });
    }
  });
</script>
</body>
</html>