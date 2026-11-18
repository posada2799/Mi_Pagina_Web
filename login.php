<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
        <a href="login.php">Iniciar Sesión</a>
        <a href="carrito.php">Carrito</a>
      </div>
    </nav>
  </header>

    <main class="main-container">
    <section class="left">
      <div class="card">
        <div class="icon">
          <img src="img/logo.png.png" alt="Moda" class="imagen-banner">
        </div>
        <h2>Moda Femenina</h2>
        <p>Descubre tu estilo único</p>
      </div>
    </section>

    <section class="right">
      <div class="form-container">
        <form action="procesar.php" method="POST">
            <input type="hidden" name="accion" value="login">
          <h2>Iniciar Sesion</h2>

          <input type="email" name="Correo" placeholder="Correo" required>
          <input type="password" name="Password" placeholder="Contraseña"required>
          <button type="submit">Iniciar Sesion</button>
          <p>¿No tienes una cuenta? <a href="registro.html">Registrate aqui</a></p> <!--con esta linea paso al documento registro de gtml -->
        </form>
      </div>
    </section>
  </main>
</body>
</html>