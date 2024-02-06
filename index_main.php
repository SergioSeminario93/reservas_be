<?php 
// Solicitamos el archivo de conexión a la base de datos
include 'includes/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Establece el juego de caracteres UTF-8 para admitir caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Configura la vista del contenido para dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Establece el título de la página -->
    <title>DOGINN</title>
    <!-- Precarga la hoja de estilos normalize.css -->
    <link rel="preload" href="css/normalize.css" as="style">
    <!-- Enlaza la hoja de estilos normalize.css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Enlaza a la fuente de Google y precarga la hoja de estilos styles.css -->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <!-- Enlaza la hoja de estilos styles.css -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Precarga y enlaza las hojas de estilos login.css -->
    <link rel="preload" href="css/login.css" as="style">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- Encabezado de la página -->
    <header>
        <h1 class="titulo">DOGINN <span>Booking</span></h1>
    </header>

    <!-- Barra de navegación -->
    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="#">Inicio</a>
            <a href="reservas.php">Reservas</a>
            <a href="#">Galeria</a>
            <a href="#">Contacto</a>
        </nav>
    </div>

    <!-- Sección principal (Hero) -->
    <section class="hero">
        <div class="contenido-hero">
            <h2>Reservas <span> de Guarderías Caninas</span></h2>
            <div class="ubicacion">
                <!-- Icono de ubicación -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p>Madrid</p>
            </div>
            <!-- Botones para iniciar sesión y registrarse -->
            <a class="boton" href="login.php">Inicia Sesión</a>
            <p>o</p>
            <a class="reg" href="registro.php">Regístrate</a>
        </div> <!-- .contenido-hero -->
    </section>

    <!-- Contenido principal (Main) -->
    <main class="contenedor sombra">
        <h2>Reserva</h2>

        <!-- Sección de servicios -->
        <div class="servicios">
            <!-- Servicio 1: Blog -->
            <section class="servicio">
                <h3>Blog</h3>
                <div class="iconos">
                    <!-- Icono del blog -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                        <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                        <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                        <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                    </svg>
                </div>
                <p> Pellentesque odio ex, bibendum quis convallis scelerisque, eleifend vitae lectus. Quisque in erat justo. </p>
            </section>
       
            <section class="servicio">
                <h3>Formación</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <line x1="4" y1="10" x2="4" y2="16" />
                        <line x1="20" y1="10" x2="20" y2="16" />
                        <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                        <line x1="8" y1="3" x2="9" y2="5" />
                        <line x1="16" y1="3" x2="15" y2="5" />
                        <line x1="9" y1="18" x2="9" y2="21" />
                        <line x1="15" y1="18" x2="15" y2="21" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M9 7c-3 0-4 3-4 5.5 0 3 2 7.5 4 7.5 1.088-.046 1.679-.5 3-.5 1.312 0 1.5.5 3 .5s4-3 4-5c-.028-.01-2.472-.403-2.5-3-.019-2.17 2.416-2.954 2.5-3-1.023-1.492-2.951-1.963-3.5-2-1.433-.111-2.83 1-3.5 1-.68 0-1.9-1-3-1z" />
                        <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                    </svg>
                </div>
                <p> Pellentesque odio ex, bibendum quis convallis scelerisque, eleifend vitae lectus. Quisque in erat justo. </p>
            </section>


            <section class="servicio">
                <h3>Notas de prensa</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <rect x="3" y="5" width="18" height="14" rx="3" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                        <line x1="7" y1="15" x2="7.01" y2="15" />
                        <line x1="11" y1="15" x2="13" y2="15" />
                    </svg>
                </div>
                <p> Pellentesque odio ex, bibendum quis convallis scelerisque, eleifend vitae lectus. Quisque in erat justo. </p>
            </section>
        </div>

        
        <section>
            <h2>Contacto</h2>
            <form class="formulario">
                <fieldset>
                    <legend>Contactános llenando todos los campos</legend>
                    <div class="contenedor-campos">
                        <div class="campo">
                            <label>Nombre</label>
                            <input class="input-text" type="text" placeholder="Tu Nombre">
                        </div>
                        <div class="campo">
                            <label>Teléfono</label>
                            <input class="input-text" type="tel" placeholder="Tu Teléfono">
                        </div>
                        <div class="campo">
                            <label>Correo</label>
                            <input class="input-text" type="email" placeholder="Tu Email">
                        </div>
                        <div class="campo">
                            <label>Mensaje</label>
                            <textarea class="input-text"></textarea>
                        </div>
                    </div>
                    <div class="alinear-derecha flex">
                        <input class="boton w-sm-100" type="submit" value="Enviar">
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <footer class="footer">
        <p>Todos los derechos reservados. DOGINN</p>
    </footer>
</body>
</html>
