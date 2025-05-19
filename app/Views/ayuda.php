<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA</title>
    <link rel="stylesheet" href="<?= base_url('ayuda.css') ?>"> <!-- Referencia a los estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <!-- Barra lateral -->
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
        <!-- Seccion para mostrar el usuario en la barra -->
        <div class="user-info">
            <?php if(session()->has('usuario_nombre')): ?>
                <p>¡Bienvenido!</p>
                <p class="username"><?= session()->get('usuario_nombre') ?></p>
            <?php else: ?>
                <p>¡Bienvenido!</p>
                <p class="username">Usuario</p>
            <?php endif; ?>
        </div>

        <ul>
            <li><a href="<?= base_url('/PagPrincipal') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Gestión" class="menu-icon">Gestión de aves
                </a></li>
            <li><a href="<?= base_url('/Reportes') ?>">
                    <img src="<?= base_url('/report.png') ?>" alt="Reportes" class="menu-icon">Reportes
                </a></li>
            <li><a href="<?= base_url('/manual') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Manual" class="menu-icon">Manual del dispositivo
                </a></li>
            <li><a href="<?= base_url('/ayuda') ?>">
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Ayuda" class="menu-icon">Ayuda
                </a></li>
        </ul>
        <div class="contacto-info">
            <img src="<?= base_url('/pollo1.png') ?>" class="menu-icons" alt="Contacto">
            <p>Línea de contacto</p>
            <p>2311442661</p>
            <p>Correo Electrónico: </p>
            <p>soporte@avicola.com</p>
        </div>
        
        <!-- Botón de cierre de sesión -->
        <div class="logout-section">
            <a href="<?= base_url('/logout') ?>" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </a>
        </div>
    </div>

    <!-- Panel principal -->
    <div class="content">
        <h1>Bienvenido a la seccion de ayuda</h1>
        
        <?php if (isset($view_content)): ?>
            <?= $view_content ?>
        <?php endif; ?>
        <div class="ayud">
            <h1>Preguntas Frecuentes (FAQ)<h1>
            <h1>¿Cómo conecto la aplicación al alimentador?</h1>
            <p>Para conectar la aplicación al alimentador, ve a la sección 'Configuración del Dispositivo' en el menú lateral e ingresa la dirección IP de tu dispositivo ESP32. Luego, presiona el botón 'Conectar'.<p>
            <h1>¿Qué hago si no puedo conectar la aplicación al alimentador?</h1>
            <p>Asegúrate de que tu dispositivo móvil y el ESP32 estén conectados a la misma red Wi-Fi. Verifica que la dirección IP ingresada sea correcta. También puedes intentar reiniciar el ESP32.<p>
            <h1>¿Cómo programo la alimentación?</h1>
            <p>Ve a la sección 'Alimentación Pollo' en el menú lateral. Allí encontrarás opciones para programar horarios y cantidades de alimentación.<p>
            <h1>¿Qué información se muestra en 'Estado del Alimentador'?</h1>
            <p>En esta sección puedes ver el estado actual de los servos, las lecturas de los sensores de distancia y el texto que se muestra en la pantalla LCD del alimentador.<p>
    </div>
</body>

</html>