// Esperamos a que cargue toda la página para ejecutar el script
document.addEventListener('DOMContentLoaded', () => {

    // 1. Capturamos todos los botones de filtro y todas las tarjetas de productos
    const botonesFiltro = document.querySelectorAll('.btn-filtro');
    const productos = document.querySelectorAll('.tarjeta-producto');

    // 2. Recorremos cada botón para escuchar el evento de "click"
    botonesFiltro.forEach(boton => {
        boton.addEventListener('click', () => {
            
            // Quitamos la clase 'activo' de todos los botones y se la ponemos al que se hizo clic
            botonesFiltro.forEach(btn => btn.classList.remove('activo'));
            boton.classList.add('activo');

            // Obtenemos la categoría que guardamos en el botón
            const categoriaFiltro = boton.getAttribute('data-categoria');

            // 3. Revisamos cada producto para ver si debe mostrarse u ocultarse
            productos.forEach(producto => {
                const categoriaProducto = producto.getAttribute('data-categoria');

                if (categoriaFiltro === 'todos' || categoriaProducto === categoriaFiltro) {
                    // Si coincide, removemos la clase 'oculto' para que se vea
                    producto.classList.remove('oculto');
                } else {
                    // Si no coincide, le agregamos la clase 'oculto' para que desaparezca
                    producto.classList.add('oculto');
                }
            });
        });
    });
});