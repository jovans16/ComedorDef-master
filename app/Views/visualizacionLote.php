<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualización de Lotes</title>
    <link rel="stylesheet" href="<?= base_url('lotesvis.css') ?>"> <!-- Referencia a los estilos -->
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
                    <img src="<?= base_url('/pollo1.png') ?>" alt="PagPrincipal" class="menu-icon">Gestión de aves
                </a></li>
            <li><a href="<?= base_url('/Reportes') ?>">
                <img src="<?= base_url('/pollo1.png') ?>" class="menu-icon">Reportes
            </a></li>
            <li><a href="<?= base_url('/manual') ?>">
                <img src="<?= base_url('/pollo1.png') ?>" class="menu-icon">Manual del dispositivo
            </a></li>
            <li><a href="<?= base_url('/ayuda') ?>">
                <img src="<?= base_url('/pollo1.png') ?>" class="menu-icon">Ayuda
            </a></li>
        </ul>
        <div class="contacto-info">
            <img src="<?= base_url('/pollo1.png') ?>" class="menu-icons">
            <p>Linea de contacto</p>
            <p>2311442661</p>
        </div>
         <!-- Botón de cierre de sesión -->
         <div class="logout-section">
            <a href="<?= base_url('/logout') ?>" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </a>
        </div>
    </div>
</div>
    
    <div class="content">
        <h2>Visualización de Lotes Registrados</h2>

        <?php if (!empty($lotes)): ?>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Número de Lote</th>
                        <th>Fecha de Ingreso</th>
                        <th>Cantidad de Pollos</th>
                        <th>Peso Promedio Inicial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lotes as $lote): ?>
                        <tr>
                            <td><?= esc($lote['numero_lote']) ?></td>
                            <td><?= esc($lote['fecha_ingreso']) ?></td>
                            <td><?= esc($lote['cantidad_pollos']) ?></td>
                            <td><?= esc($lote['peso_promedio']) ?> kg</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay lotes registrados.</p>
        <?php endif; ?>
    </div>
</body>
</html>