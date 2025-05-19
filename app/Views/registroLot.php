<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVICOLA</title>
    <link rel="stylesheet" href="<?= base_url('Lote.css') ?>"> <!-- Referencia a los estilos -->
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
                    <img src="<?= base_url('/pollo1.png') ?>" alt="Reportes" class="menu-icon">Reportes
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
            <p>Linea de contacto</p>
            <p>2311442661</p>
        </div>
        <div class="logout-section">
            <a href="<?= base_url('/logout') ?>" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </a>
        </div>
    </div>

    <!-- Panel principal -->
    <div class="content">
        <h1>Registro de lote de pollos</h1>
        
        <?php if (isset($view_content)): ?>
            <?= $view_content ?>
        <?php endif; ?>

        <form action="<?= site_url('/guardarLote') ?>" method="POST"> 
            <div class="form-container">
                <p>Número de lote</p>
                <input type="number" name="lote" class="form-input" placeholder="Ingrese el número de lote" required>
                
                <p>Fecha de ingreso</p>
                <input type="date" name="fecha" class="form-input" required>
                
                <p>Cantidad de pollos en el lote</p>
                <input type="number" name="cantidad" class="form-input" placeholder="Ingrese la cantidad de pollos en el lote" required>
                
                <p>Peso promedio inicial</p>
                <input type="number" name="peso_inicial" class="form-input" placeholder="Ingrese el peso inicial KG" required>
                
                <button type="submit" class="formulario-button">Guardar</button>
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?= session('success') ?>
                    </div>
                    <?php endif; ?>
            </div>
        </form>
    </div>
</body>

</html>