<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA</title>
    <link rel="stylesheet" href="<?= base_url('manual.css') ?>"> <!-- Referencia a los estilos -->
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
        <h1>Bienvenido a la seccion del manual de dispositivo</h1>        
        <?php if (isset($view_content)): ?>
            <?= $view_content ?>
        <?php endif; ?>
        <div class="info">
    <h1>Pantalla Principal (Home)</h1>
    <p>Descripción de la pantalla principal y sus elementos. <br> Cómo visualizar el estado general del sistema<p>
    <h1>Alimentación del Pollo</h1>
    <p>Pasos para programar o activar la alimentación. <br> Opciones de configuración para la cantidad y horarios de alimentación.<p>
    <h1>Configuración del Dispositivo</h1>
    <p>Cómo conectar la aplicación con el dispositivo alimentador.<br>Configuración de la dirección IP del dispositivo.<p>
    <h1>Estado del Alimentador</h1>
    <p>Interpretación de los datos mostrados (estado de servos, sensores, etc.).<p>
    <h1>Número del Producto</h1>
    <p>Información sobre el identificador único del dispositivo.<p>
    <h1>Ayuda</h1>
    <p>Sección para encontrar respuestas a preguntas frecuentes y contacto de soporte.<p>
    <h1>Control Manual</h1>
    <p>Instrucciones sobre cómo utilizar la función de control manual (si la tienes).<p>
    <h1>Gracias por utilizar nuestra aplicación.<h1>

    </div>
</body>
</html>